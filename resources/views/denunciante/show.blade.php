@extends('layouts.app')

@section('template_title')
    {{ $denunciante->name ?? 'Show Denunciante' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Denunciante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('denunciantes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rutdenunciante:</strong>
                            {{ $denunciante->rutDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombredenunciante:</strong>
                            {{ $denunciante->nombreDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Direcciondenunciante:</strong>
                            {{ $denunciante->direccionDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Celulardenunciante:</strong>
                            {{ $denunciante->celularDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Correodenunciante:</strong>
                            {{ $denunciante->correoDenunciante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
