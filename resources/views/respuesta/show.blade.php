@extends('layouts.app')

@section('template_title')
    {{ $respuesta->name ?? 'Show Respuesta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Respuesta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('respuestas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Iddenuncia:</strong>
                            {{ $respuesta->idDenuncia }}
                        </div>
                        <div class="form-group">
                            <strong>Correofuncionario:</strong>
                            {{ $respuesta->correoFuncionario }}
                        </div>
                        <div class="form-group">
                            <strong>Respuesta:</strong>
                            {{ $respuesta->respuesta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
