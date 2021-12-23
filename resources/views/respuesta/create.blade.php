@extends('layouts.app')

@section('template_title')
    Create Respuesta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Respuesta</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('respuestas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="correoFuncionario" id="correoFuncionario" class="form-control" value="{{ Auth::user()->email}}" hidden>
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label for="idDenuncia">Numero de denuncia</label>
                                    <input type="text" name="idDenuncia" id="idDenuncia" class="form-control" readonly="readonly" value="{{$idDenuncia}}">
                                </div>                
                                <div class="col-md-3">
                                    <label for="estado">Estado de la denuncia</label>
                                    <select name="estado" id="estado" class="form-control">
                                        <option value="">Seleccione</option>
                                        <option value="En proceso">En proceso</option>
                                        <option value="Finalizada">Finalizada</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" row form-group">
                                <div class="col">
                                    <label for="respuesta">Respuesta</label>
                                    <textarea name="respuesta" id="respuesta" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
