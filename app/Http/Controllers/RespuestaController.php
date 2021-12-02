<?php

namespace App\Http\Controllers;

use App\Models\Respuesta;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class RespuestaController
 * @package App\Http\Controllers
 */
class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuestas = Respuesta::paginate();
        $users = User::pluck('email','name');
        return view('respuesta.index', compact('respuestas','users'))
            ->with('i', (request()->input('page', 1) - 1) * $respuestas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $respuesta = new Respuesta();
        return view('respuesta.create', compact('respuesta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Respuesta::$rules);

        $respuesta = Respuesta::create($request->all());

        return redirect()->route('respuestas.index')
            ->with('success', 'Respuesta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respuesta = Respuesta::find($id);

        return view('respuesta.show', compact('respuesta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $respuesta = Respuesta::find($id);

        return view('respuesta.edit', compact('respuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Respuesta $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        request()->validate(Respuesta::$rules);

        $respuesta->update($request->all());

        return redirect()->route('respuestas.index')
            ->with('success', 'Respuesta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $respuesta = Respuesta::find($id)->delete();

        return redirect()->route('respuestas.index')
            ->with('success', 'Respuesta deleted successfully');
    }
}
