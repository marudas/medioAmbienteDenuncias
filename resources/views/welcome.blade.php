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

                <div class="shadow p-5 mb-5 bg-white rounded">
                <h3 style="font-family:constaia;">Ingresa tu denuncia</h3><hr>
                    <div class="card-body">
                        <form method="POST" action="{{ route('denunciantes.Guardar') }}" id="formWelcome"  role="form" enctype="multipart/form-data" class="needs-validation" novalidate >
                            @csrf                          
                            <div class="box-body">
                                <div class="row form-group">
                                    <div class="col">
                                        <input name="rutDenunciante" placeholder="Rut" id="rutDenunciante" type="text" class="form-control" required onkeypress='return numeros(event,this)' onkeyup='puntosRut(event,this)'>
                                        <div class="invalid-feedback">Indique un rut valido</div>
                                    </div><br><br><br>
                                    <div class="col">
                                        <input name="nombreDenunciante" placeholder="Nombre Completo" id="nombreDenunciante" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Rellene el campo</div>
                                    </div>
                                    <div class="col">
                                        <input name="celularDenunciante" placeholder="Celular" id="celularDenunciante" type="number" class="form-control" required>
                                        <div class="invalid-feedback">Rellene el campo</div>
                                    </div>
                                </div>
                                <div class="row form-group">                                
                                    <div class="col-4">
                                        <input name="correoDenunciante" placeholder="Email" id="correoDenunciante" type="text" class="form-control">
                                        <div class="invalid-feedback">El correo ingresado ya esta registrado</div>
                                    </div><br><br><br>
                                    <div class="col-4">
                                        <input name="direccionDenunciante" placeholder="Dirección" id="direccionDenunciante" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Rellene el campo</div>
                                    </div>
                                    <div class="col-4">
                                        <select name="tipoDenuncia" id="tipoDenuncia" class="form-control" required>
                                            <option value="">Seleccione un tipo de denuncia</option>
                                            <option value="Tenencia responsable">Tenencia responsable</option>
                                            <option value="Microbasural">Microbasural</option>
                                            <option value="Aguas servidas">Aguas servidas</option>
                                            <option value="Polucion">Polucion</option>
                                            <option value="Ruidos molestos">Ruidos molestos</option>
                                            <option value="Quemas">Quemas</option>
                                        </select>
                                        <div class="invalid-feedback">Seleccione un tipo de denuncia</div>
                                    </div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col">
                                        <input name="denunciado" placeholder="Nombre o apodo del denunciado" id="denunciado" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Indique el nombre de la persona a la que quiere denunciar, en caso que no lo tenga ingrese el nombre de pila o apodo</div>
                                    </div><br><br><br>
                                    <div class="col">
                                        <input name="direccionDenuncia" placeholder="Dirección de la denuncia" id="direccionDenuncia" type="text" class="form-control" required>
                                        <div class="invalid-feedback">Indique la direccion que quiere denunciar</div>
                                    </div>
                                    <div class="col">
                                        <input name="file" id="file" type="file" class="form-control" accept=".doc,.docx,.pdf,.jpeg,.jpg,.png,.rar,.zip" size="10mb">
                                        <div class="invalid-feedback">EL archivo no debe pesar mas de 10mb</div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col">
                                        <label for="motivo">Motivo de la denuncia</label>
                                        <textarea name="motivo" id="motivo" style="resize:none;" max-length="3" rows="6" class="form-control" required></textarea>
                                        <div class="invalid-feedback">Indique el motivo de la denuncia</div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="">autoriza la entrega de sus datos en caso de que sean requeridos por el denunciado</label>
                                    <div class="col-md-1">
                                        <input class="form-check-input" type="radio" value="1" id=""  name="autorizacion" required>
                                        <label class="form-check-label" for="">si</label>
                                    </div>
                                    <div class="col-md-1">
                                        <input class="form-check-input" type="radio" value="0" id="" name="autorizacion" required>
                                        <label class="form-check-label" for="">no</label>
                                        <div class="invalid-feedback">Indique si autoriza el uso de sus datos</div>
                                    </div>
                                </div><hr>
                                <div class="box-footer" align="right">
                                    <button type="submit"  class="btn btn-outline-success">Enviar <i class="fas fa-sign-in-alt"></i> </button>
                                </div>
                            </div>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection