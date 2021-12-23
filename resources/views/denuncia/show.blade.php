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
										<th>funcionario</th>
										<th>Respuesta</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($respuestas as $respuesta)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $respuesta->idDenuncia }}</td>
											<td>{{ $respuesta->correoFuncionario }}</td>
											<td>{{ $respuesta->respuesta }}</td>

                                            <td>
                                                <form action="{{ route('respuestas.destroy',$respuesta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('respuestas.show',$respuesta->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('respuestas.edit',$respuesta->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
        </div>
    </section>
@endsection
