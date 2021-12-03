@extends('layouts.app')

@section('template_title')
    Denunciante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Denunciante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('denunciantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        <th>No</th>
                                        
										<th>Rutdenunciante</th>
										<th>Nombredenunciante</th>
										<th>Direcciondenunciante</th>
										<th>Celulardenunciante</th>
										<th>Correodenunciante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($denunciantes as $denunciante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $denunciante->rutDenunciante }}</td>
											<td>{{ $denunciante->nombreDenunciante }}</td>
											<td>{{ $denunciante->direccionDenunciante }}</td>
											<td>{{ $denunciante->celularDenunciante }}</td>
											<td>{{ $denunciante->correoDenunciante }}</td>

                                            <td>
                                                <form action="{{ route('denunciantes.destroy',$denunciante->rutDenunciante) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('denunciantes.show',$denunciante->rutDenunciante) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('denunciantes.edit',$denunciante->rutDenunciante) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $denunciantes->links() !!}
            </div>
        </div>
    </div>
@endsection
