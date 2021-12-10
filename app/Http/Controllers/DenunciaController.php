<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\Denunciante;
use Illuminate\Http\Request;

/**
 * Class DenunciaController
 * @package App\Http\Controllers
 */
class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denuncias = Denuncia::paginate();
        $denunciante = Denunciante::pluck('rutDenunciante','nombreDenunciante','direccionDenunciante','celularDenunciante','correoDenunciante');
        return view('denuncia.index', compact('denuncias','denunciante'))
            ->with('i', (request()->input('page', 1) - 1) * $denuncias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $denuncia = new Denuncia();
        return view('denuncia.create', compact('denuncia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Denuncia::$rules);

        $denuncia = Denuncia::create(['tipoDenuncia'=>$request->get('tipoDenuncia'),
        'rutDenunciante'=>$request->get('rutDenunciante'),'denunciado'=>$request->get('denunciado'),
        'direccionDenunciado'=>$request->get('direccionDenunciado'),'motivo'=>$request->get('motivo')]);
        if($request->file('file')){
            $path = Storage::disk('public')->put('file', $request->file('file'));
            $denuncia->fill(['file'=>asset($path)])->save();
        }

        return redirect()->route('denuncias.index')
            ->with('success', 'Denuncia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.edit', compact('denuncia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Denuncia $denuncia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Denuncia $denuncia)
    {
        request()->validate(Denuncia::$rules);

        $denuncia->update($request->all());

        return redirect()->route('denuncias.index')
            ->with('success', 'Denuncia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $denuncia = Denuncia::find($id)->delete();

        return redirect()->route('denuncias.index')
            ->with('success', 'Denuncia deleted successfully');
    }
}
