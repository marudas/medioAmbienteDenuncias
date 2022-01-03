@extends('layouts.app')

@section('template_title')
    Denuncia
@endsection

@section('content')
    <div class="container-fluid">
                <div class="shadow mb-5 p-5 bg-white rounded">
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead" style="background-color: rgb(30, 120, 120); color: white; text-align: center;">
                                    <tr>   
                                        <th> <i class="fas fa-sort-numeric-down"></i> Numero</th>               
										<th> <i class="far fa-calendar-alt" ></i> Fecha denuncia</th>
										<th> <i class="fas fa-sort-numeric-down" ></i> Rut</th>
										<th> <i class="fas fa-file-contract" ></i> Tipo de denuncia</th>
                                        <th> <i class="fas fa-user" ></i> Denunciado</th>
										<th> <i class="fas fa-home" ></i> Dirección denuncia</th>
										<th> <i class="fas fa-cogs" ></i> Estado</th>
										<th> <i class="fas fa-search"></i> Ver detalle</th>
                                        <th> <i class="fas fa-cogs"></i> Responder</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denuncias as $denuncia)
                                        <tr>
                                            <th style="text-align:center;">{{$denuncia->id}}</th>
                                            <td style="text-align:center;">{{$denuncia->created_at}}</td>
                                            <td style="text-align:center;">{{$denuncia->rutDenunciante}} </td>
                                            <td style="text-align:center;">{{$denuncia->tipoDenuncia}}</td>
                                            <td style="text-align:center;">{{$denuncia->denunciado}}</td>
                                            <td style="text-align:center;">{{$denuncia->direccionDenuncia}}</td>                      
                                            <td style="text-align:center;">{{$denuncia->estado}}</td>
                                            <td style="text-align:center;"><a class="btn btn-sm btn-outline-primary " href="{{ route('denuncias.show',$denuncia->id) }}"><i class="fa fa-fw fa-eye"></i></a></td>
                                            <td style="text-align:center;"><a class="btn btn-sm btn-outline-success" href="{{ route('respuestas.create',$denuncia->id) }}"><i class="fa fa-fw fa-edit"></i> responder</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
           
           
                {!! $denuncias->links() !!}
        </div>
    </div>
@endsection
