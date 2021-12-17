<?php

namespace App\Http\Controllers;

use App\Models\Denunciante;
use App\Models\Denuncia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

/**
 * Class DenuncianteController
 * @package App\Http\Controllers
 */
class DenuncianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denunciantes = Denunciante::paginate();

        return view('denunciante.index', compact('denunciantes'))
            ->with('i', (request()->input('page', 1) - 1) * $denunciantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $denunciante = new Denunciante();
        return view('denunciante.create', compact('denunciante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Denunciante::$rules);

        $denunciante = Denunciante::create($request->all());

        return redirect()->route('denunciante.index')
            ->with('success', 'denunciante created successfully.');
    }
    public function Guardar(Request $request){
        
        $denunciante = Denunciante::where('rutDenunciante','=', $request->get('rutDenunciante'))->first();
        if($denunciante==null){
            $denunciante = Denunciante::create(['rutDenunciante'=>$request->get('rutDenunciante'),
            'nombreDenunciante' =>$request->get('nombreDenunciante'),'direccionDenunciante'  =>$request->get('direccionDenunciante'),
            'celularDenunciante' =>$request->get('celularDenunciante'),'correoDenunciante'=>$request->get('correoDenunciante')]);

        }else{
            $d= Denunciante::where('rutDenunciante','=', $request->get('rutDenunciante'))->update(['nombreDenunciante' =>$request->get('nombreDenunciante'),'direccionDenunciante'  =>$request->get('direccionDenunciante'),
            'celularDenunciante' =>$request->get('celularDenunciante'),'correoDenunciante'=>$request->get('correoDenunciante')]);
        }
        $denuncia = new Denuncia(['tipoDenuncia'=>$request->get('tipoDenuncia'),
            'rutDenunciante'=>$request->get('rutDenunciante'),'denunciado'=>$request->get('denunciado'),
            'direccionDenunciado'=>$request->get('direccionDenunciado'),'motivo'=>$request->get('motivo'), 'autorizacion'=>$request->get('autorizacion')]);
        
        $denunciante->denuncias()->save($denuncia);
        if($request->file('file')){
            $path = Storage::disk('public')->put('file', $request->file('file'));
            $denuncia->fill(['file'=>asset($path)])->save();
        }

        $email=$request->get('correoDenunciante');
        if($email != null){ 
            $data = array(
                'subject'   =>  "Fiscalización ambiental",
            'name'      =>  "Fiscalización ambiental",
            'message'   =>   "$denuncia->id",
            'destinatarios' => "$denunciante->nombreDenunciante"
        );
            $subject="Fiscalización ambiental";  
            
            Mail::to($email)->send(new SendMail($subject,$data));
        }   
        return redirect()->route('denunciantes.index')
            ->with('success', 'denunciante created successfully.'); 
    }


    public function find($rutDenunciante)
    {
        $denunciante = Denunciante::where('rutDenunciante','=', $rutDenunciante)->first();
        if($denunciante!=null){
            return $denunciante;
        }else{
            return false;
        }        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($rutDenunciante)
    {
        $denunciante = Denunciante::where('rutDenunciante','=', $rutDenunciante)->first();

        return view('denunciante.show', compact('denunciante'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($rutDenunciante)
    {
        $denunciante = Denunciante::where('rutDenunciante','=', $rutDenunciante)->first();

        return view('denunciante.edit', compact('denunciante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Denunciante $denunciante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denunciante $denunciante)
    {
        request()->validate(Denunciante::$rules);

        $denunciante->update($request->all());

        return redirect()->route('denunciantes.index')
            ->with('success', 'Denunciante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($rutDenunciante)
    {
        $denunciante = Denunciante::where('rutDenunciante','=', $rutDenunciante)->delete();
        //return redirect()->route('denunciantes.index')->with('success', 'Denunciante deleted successfully');
        return $denunciante;
    }
}
