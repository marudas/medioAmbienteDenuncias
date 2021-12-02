<?php

namespace App\Http\Controllers;

use App\Models\Denunciante;
use Illuminate\Http\Request;

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

        return redirect()->route('denunciantes.index')
            ->with('success', 'Denunciante created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $denunciante = Denunciante::find($id);

        return view('denunciante.show', compact('denunciante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $denunciante = Denunciante::find($id);

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
    public function destroy($id)
    {
        $denunciante = Denunciante::find($id)->delete();

        return redirect()->route('denunciantes.index')
            ->with('success', 'Denunciante deleted successfully');
    }
}
