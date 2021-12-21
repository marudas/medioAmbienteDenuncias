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
                            <span class="card-title">Detalle de la denuncia {{ $denuncia->id }}</span>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Fecha de ingreso de la denuncia:</strong>
                            {{ $denuncia->created_at }}
                        </div>
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
                            <strong>Autoriza a entregar datos:</strong>
                            @if($denuncia->autorizacion=="1")
                                si
                            @else
                                no
                            @endif
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $denuncia->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Ultima actualización de la denuncia:</strong>
                            {{ $denuncia->updated_at }}
                        </div>
                        @if(!empty( $denuncia->file))
                        <div class="form-group">
                            <strong>File:</strong>
                            <a class="btn btn-sm btn-primary" target="_blank" href="{{ $denuncia->file }}"><i class="fa fa-fw fa-eye"></i> Descargar</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
