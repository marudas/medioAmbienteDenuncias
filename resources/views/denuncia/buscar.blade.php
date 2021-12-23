@extends('layouts.app')
@section('content')
<script src="{{ asset('js/validarForm.js') }}" defer></script>
<div class="container">
    <div class="row">
      @csrf    
      <form action="{{route('denuncias.buscar')}}" method="get" onsubmit="return showLoad()" class="needs-validation" novalidate> 
        <div class="row">
          <div class="col-md-3 form-group">
              <label for="">Buscar por rut</label>
              <input type="text" class="form-control" name="rutDenunciante" id="rutDenunciante" onkeypress='return numeros(event,this)' onkeyup='puntosRut(event,this)'>
              <div class="invalid-feedback">Indique un rut valido</div>
          </div>
          <div class="col-md-3 form-group">
              <label for="">Buscar por numero de demanda</label>
              <input type="text" class="form-control" name="id" id="id">
          </div> 
          <div class="col-md-3 form-group">
              <input type="submit" value="Buscar">
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
        <h2>Resultado de búsqueda</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">Numero</th>
              <th scope="col" style="text-align: center;">Fecha denuncia</th>
              <th scope="col" style="text-align: center;">Rut</th>
              <th scope="col" style="text-align: center;">Tipo de denuncia</th>
              <th scope="col" style="text-align: center;">Denunciado</th>
              <th scope="col" style="text-align: center;">Dirección denunciado</th>
              <th scope="col" style="text-align: center;">Estado</th>
              <th scope="col" style="text-align: center;">Ver detalle</th>
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
    <center><a href="{{route('denuncias.buscar')}}" class="btn btn-info" style="font-family: cambria">Restablecer búsqueda</a></center>
    <br>
  </div>       
@endif
@stop