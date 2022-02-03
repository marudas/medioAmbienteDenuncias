@extends('layouts.app')

@section('template_title')
    {{ $denuncia->name ?? 'Show Denuncia' }}
@endsection

@section('content')
    <section class="content container-fluid">
    <div class="container">
<form method="post" action="{{route('users.updatePassword')}}">
 {{csrf_field()}}
 <div class="form-group">
  <label for="mypassword">Introduce tu contraseña actual:</label>
  <input type="password" name="mypassword" class="form-control">
  <div class="text-danger">{{$errors->first('mypassword')}}</div>
 </div>
 <div class="form-group">
  <label for="password">Introduce tu nuevo contraseña:</label>
  <input type="password" name="password" class="form-control">
  <div class="text-danger">{{$errors->first('password')}}</div>
 </div>
 <div class="form-group">
  <label for="mypassword">Confirma tu nuevo contaseña:</label>
  <input type="password" name="password_confirmation" class="form-control">
 </div>
 <button type="submit" class="btn btn-primary">Cambiar mi contraseña</button>
</form>
</div>

    </section>
@endsection
