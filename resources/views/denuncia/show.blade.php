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
                            <span class="card-title">Detalle de la denuncia: <b> {{ $denuncia->numero }}</b></span>
                        </div>
                        @role('Admin')
                            <div class="float-left">
                                <a class="btn btn-sm btn-success" href="{{ route('respuestas.create',$denuncia->id) }}"><i class="fa fa-fw fa-edit"></i> responder</a>
                            </div>
                        @endrole
                        @role('Funcionario')
                            <div class="float-left">
                                <a class="btn btn-sm btn-success" href="{{ route('respuestas.create',$denuncia->id) }}"><i class="fa fa-fw fa-edit"></i> responder</a>
                            </div>
                        @endrole
                    </div>
                    <div class="card-body">
                        <h5>Datos del denunciante</h5><hr>                   
                        <div class="form-group">
                            <strong>Rut denunciante:</strong>
                            {{ $denuncia->rutDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre denunciante:</strong>
                            {{ $denuncia->nombreDenunciante }}
                        </div>
                        <div class="form-group">
                            <strong>Celular denunciante:</strong>
                            {{ $denuncia->celularDenunciante }}
                        </div>
                        <hr>
                        <h5>Datos de la denuncia</h5><hr>
                        <div class="form-group">
                            <strong>Fecha de ingreso de la denuncia:</strong>
                            {{ $denuncia->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de denuncia:</strong>
                            {{ $denuncia->tipoDenuncia }}
                        </div>
                        <div class="form-group">
                            <strong>Denunciado:</strong>
                            {{ $denuncia->denunciado }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion denuncia:</strong>
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
                            <strong>Ultima actualizaci??n de la denuncia:</strong>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Respuestas</span>
                        </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>id respuestas</th>
										<th>Funcionario</th>
										<th>Respuesta</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($respuestas as $respuesta)
                                        <tr>                                           
											<td>{{ $respuesta->id }}</td>
											<td>{{ $respuesta->name }}</td>
											<td>{{ $respuesta->respuesta }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </section>
@endsection
