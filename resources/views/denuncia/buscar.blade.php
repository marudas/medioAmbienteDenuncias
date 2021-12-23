@extends('layouts.app')
@section('content')
<script src="{{ asset('js/validarForm.js') }}" defer></script>
<div class="container">
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
    <div class="shadow mb-5 p-5 bg-white rounded">
    <div class="row">
      @csrf    
      <form action="{{route('denuncias.buscar')}}" method="get" class="needs-validation" novalidate> 
        <div class="row">
          <div class="col-md-3 form-group">
              <input type="text" placeholder="Buscar por RUT" class="form-control" name="rutDenunciante" id="rutDenunciante" onkeypress='return numeros(event,this)' onkeyup='puntosRut(event,this)'>
              <div class="invalid-feedback">Indique un rut valido</div>
          </div>
          <div class="col-md-3 form-group">
              <input type="text" placeholder="Buscar por número de demanda" class="form-control" name="id" id="id">
          </div> 
          <div class="col-md-3 form-group">
              <input type="submit" class="form-control btn btn-outline-success" value="Buscar">
          </div> 
        </div>      
      </form>
    </div>
</div>
<br>
@if (isset($buscar))
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h3 style="font-family:constaia;">Resultado de búsqueda</h3><hr>
        <table class="table">
          <thead class="thead"  style="background-color: rgb(30, 120, 120); color: white; text-align: center;">
            <tr>
              <th scope="col" style="text-align: center;"> <i class="fas fa-sort-numeric-down"></i> Número</th>
              <th scope="col" style="text-align: center;"> <i class="far fa-calendar-alt"></i> Fecha denuncia</th>
              <th scope="col" style="text-align: center;"> <i class="fas fa-sort-numeric-down"></i> Rut</th>
              <th scope="col" style="text-align: center;"> <i class="fas fa-file-contract"></i> Tipo de denuncia</th>
              <th scope="col" style="text-align: center;"> <i class="fas fa-user"></i> Denunciado</th>
              <th scope="col" style="text-align: center;"> <i class="fas fa-home"></i> Dirección denuncia</th>
              <th scope="col" style="text-align: center;"> <i class="fas fa-cogs"></i> Estado</th>
              <th scope="col" style="text-align: center;"> <i class="fas fa-search"></i> Ver detalle</th>
            </tr>
          </thead>
          <tbody>               
            @foreach($buscar as $buscars)
              <tr>
                <td  style="text-align: center;">{{$buscars->id}}</td>
                <td  style="text-align: center;">{{$buscars->created_at}}</td>
                <td  style="text-align: center;">{{$buscars->rutDenunciante}} </td>
                <td  style="text-align: center;">{{$buscars->tipoDenuncia}}</td>
                <td style="text-align: center;">{{$buscars->denunciado}}</td>
                <td style="text-align: center;">{{$buscars->direccionDenuncia}}</td>                      
                <td style="text-align: center;">{{$buscars->estado}}</td>
                <td><a class="btn btn-sm btn-primary " href="{{ route('denuncias.show',$buscars->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div> 
    <center><a href="{{route('denuncias.buscar')}}" class="btn btn-outline-success">Restablecer búsqueda</a></center>
    <br>
  </div>       
  </div>
@endif
@stop