<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idDenuncia') }}
            {{ Form::text('idDenuncia', $respuesta->idDenuncia, ['class' => 'form-control' . ($errors->has('idDenuncia') ? ' is-invalid' : ''), 'placeholder' => 'Iddenuncia']) }}
            {!! $errors->first('idDenuncia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correoFuncionario') }}
            {{ Form::text('correoFuncionario', $respuesta->correoFuncionario, ['class' => 'form-control' . ($errors->has('correoFuncionario') ? ' is-invalid' : ''), 'placeholder' => 'Correofuncionario']) }}
            {!! $errors->first('correoFuncionario', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('respuesta') }}
            {{ Form::text('respuesta', $respuesta->respuesta, ['class' => 'form-control' . ($errors->has('respuesta') ? ' is-invalid' : ''), 'placeholder' => 'Respuesta']) }}
            {!! $errors->first('respuesta', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>