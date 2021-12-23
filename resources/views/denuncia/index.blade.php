@extends('layouts.app')

@section('template_title')
    Denuncia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listado de denuncias') }}
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>   
                                        <th>Numero</th>               
										<th>Fecha denuncia</th>
										<th>Rut</th>
										<th>Tipo de denuncia</th>
                                        <th>Denunciado</th>
										<th>Dirección denuncia</th>
										<th>Estado</th>
										<th>Ver detalle</th>
                                        <th>Responder</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denuncias as $denuncia)
                                        <tr>
                                            <td>{{$denuncia->id}}</td>
                                            <td>{{$denuncia->created_at}}</td>
                                            <td>{{$denuncia->rutDenunciante}} </td>
                                            <td>{{$denuncia->tipoDenuncia}}</td>
                                            <td>{{$denuncia->denunciado}}</td>
                                            <td>{{$denuncia->direccionDenuncia}}</td>                      
                                            <td>{{$denuncia->estado}}</td>
                                            <td><a class="btn btn-sm btn-primary " href="{{ route('denuncias.show',$denuncia->id) }}"><i class="fa fa-fw fa-eye"></i></a></td>
                                            <td><a class="btn btn-sm btn-success" href="{{ route('respuestas.create',$denuncia->id) }}"><i class="fa fa-fw fa-edit"></i> responder</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $denuncias->links() !!}
            </div>
        </div>
    </div>
@endsection
