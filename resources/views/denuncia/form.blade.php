<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipoDenuncia') }}
            {{ Form::text('tipoDenuncia', $denuncia->tipoDenuncia, ['class' => 'form-control' . ($errors->has('tipoDenuncia') ? ' is-invalid' : ''), 'placeholder' => 'Tipodenuncia']) }}
            {!! $errors->first('tipoDenuncia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rutDenunciante') }}
            {{ Form::text('rutDenunciante', $denuncia->rutDenunciante, ['class' => 'form-control' . ($errors->has('rutDenunciante') ? ' is-invalid' : ''), 'placeholder' => 'Rutdenunciante']) }}
            {!! $errors->first('rutDenunciante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('denunciado') }}
            {{ Form::text('denunciado', $denuncia->denunciado, ['class' => 'form-control' . ($errors->has('denunciado') ? ' is-invalid' : ''), 'placeholder' => 'Denunciado']) }}
            {!! $errors->first('denunciado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccionDenuncia') }}
            {{ Form::text('direccionDenuncia', $denuncia->direccionDenuncia, ['class' => 'form-control' . ($errors->has('direccionDenuncia') ? ' is-invalid' : ''), 'placeholder' => 'Direcciondenuncia']) }}
            {!! $errors->first('direccionDenuncia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('motivo') }}
            {{ Form::text('motivo', $denuncia->motivo, ['class' => 'form-control' . ($errors->has('motivo') ? ' is-invalid' : ''), 'placeholder' => 'Motivo']) }}
            {!! $errors->first('motivo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $denuncia->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('file') }}
            {{ Form::text('file', $denuncia->file, ['class' => 'form-control' . ($errors->has('file') ? ' is-invalid' : ''), 'placeholder' => 'File']) }}
            {!! $errors->first('file', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>