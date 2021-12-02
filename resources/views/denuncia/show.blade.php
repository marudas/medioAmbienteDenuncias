@extends('layouts.app')

@section('template_title')
    {{ $denuncia->name ?? 'Show Denuncia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Denuncia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('denuncias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipodenuncia:</strong>
                            {{ $denuncia->tipoDenuncia }}
                        </div>
                        <div class="form-group">
                            <strong>Rutdenunciante:</strong>
                            {{ $denuncia->rutDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Denunciado:</strong>
                            {{ $denuncia->denunciado }}
                        </div>
                        <div class="form-group">
                            <strong>Direcciondenuncia:</strong>
                            {{ $denuncia->direccionDenuncia }}
                        </div>
                        <div class="form-group">
                            <strong>Motivo:</strong>
                            {{ $denuncia->motivo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $denuncia->estado }}
                        </div>
                        <div class="form-group">
                            <strong>File:</strong>
                            {{ $denuncia->file }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
