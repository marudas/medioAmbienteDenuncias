@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="shadow p-5 mb-5 bg-white rounded">
            <h3 style="font-family:constaia;">Registro de Usuario</h3><hr>

                <div class="card-body" align="center">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      
                        <br>  <br>  <div class="mb-3">

                            <div class="col-md-6">
                                <input id="name" placeholder="Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                            <br>
                        <div class="mb-3">

                            <div class="col-md-6">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">

                            <div class="col-md-6">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="mb-3">

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mb-3">
                        <br>
                            <div class="col-md-6">
                                <select name="rol_usuario" class="form-select" id="rol_usuario">
                                    <option value="">Seleccione el permiso del usuario</option>
                                    <option value="administrador">administrador</option>
                                    <option value="funcionario">funcionario</option>
                                </select>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br><hr>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-outline-success">
                                    Ingresar <i class="fas fa-sign-in-alt"></i>
                                </button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
