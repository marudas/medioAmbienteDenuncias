@extends('layouts.app')

@section('template_title')
    
@endsection

@section('content')

    <script src="{{ asset('js/validarForm.js') }}" defer></script>
    <script src="{{ asset('js/welcome.js') }}" defer></script>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Ingresa tu denuncia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('denunciantes.store') }}"  role="form" enctype="multipart/form-data" class="needs-validation" novalidate >
                            @csrf                          
                            <div class="box-body">
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="rutDenunciante">Rut</label>
                                        <input name="rutDenunciante" id="rutDenunciante" type="text" class="form-control" required onkeypress='return numeros(event,this)' onkeyup='puntosRut(event,this)'>
                                        <div class="invalid-feedback">Indique un rut valido</div>
                                    </div>
                                    <div class="col">
                                        <label for="nombreDenunciante">Nombre completo</label>
                                        <input name="nombreDenunciante" id="nombreDenunciante" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Rellene el campo</div>
                                    </div>
                                    <div class="col">
                                        <label for="celularDenunciante">Celular</label>
                                        <input name="celularDenunciante" id="celularDenunciante" type="number" class="form-control" required>
                                        <div class="invalid-feedback">Rellene el campo</div>
                                    </div>
                                </div>
                                <div class="row form-group">                                
                                    <div class="col-4">
                                        <label for="correoDenunciante">email</label>
                                        <input name="correoDenunciante" id="correoDenunciante" type="text" class="form-control">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="col-4">
                                        <label for="direccionDenunciante">direccion</label>
                                        <input name="direccionDenunciante" id="direccionDenunciante" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Rellene el campo</div>
                                    </div>
                                    <div class="col-4">
                                        <label for="tipoDenuncia">tipo de denuncia</label>
                                        <select name="tipoDenuncia" id="tipoDenuncia" class="form-control" required>
                                            <option value="">Seleccione una opcion</option>
                                            <option value="1">tipo 1</option>
                                            <option value="2">tipo 2</option>
                                        </select>
                                        <div class="invalid-feedback">Seleccione un tipo de denuncia</div>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="denunciado">Nombre o apodo del denunciado</label>
                                        <input name="denunciado" id="denunciado" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Indique el nombre de la persona a la que quiere denunciar, en caso que no lo tenga ingrese el nombre de pila o apodo</div>
                                    </div>
                                    <div class="col">
                                        <label for="direccionDenuncia">Direccion de la denuncia</label>
                                        <input name="direccionDenuncia" id="direccionDenuncia" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Indique la direccion que quiere denunciar</div>
                                    </div>
                                    <div class="col">
                                        <label for="file">archivo</label>
                                        <input name="file" id="file" type="file" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="motivo">Motivo de la denuncia</label>
                                        <textarea name="motivo" id="motivo" class="form-control" required></textarea>
                                        <div class="invalid-feedback">Indique el motivo de la denuncia</div>
                                    </div>
                                </div>
                                <div class="box-footer mt20">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection