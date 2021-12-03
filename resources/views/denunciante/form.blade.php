<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rutDenunciante') }}
            {{ Form::text('rutDenunciante', $denunciante->rutDenunciante, ['class' => 'form-control' . ($errors->has('rutDenunciante') ? ' is-invalid' : ''), 'placeholder' => '11111111-1', 'onkeypress'=> 'return numeros(event,this)', 'onfocusout'=>'puntosRut(event,this)']) }}
            {!! $errors->first('rutDenunciante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombreDenunciante') }}
            {{ Form::text('nombreDenunciante', $denunciante->nombreDenunciante, ['class' => 'form-control' . ($errors->has('nombreDenunciante') ? ' is-invalid' : ''), 'placeholder' => 'Nombredenunciante']) }}
            {!! $errors->first('nombreDenunciante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccionDenunciante') }}
            {{ Form::text('direccionDenunciante', $denunciante->direccionDenunciante, ['class' => 'form-control' . ($errors->has('direccionDenunciante') ? ' is-invalid' : ''), 'placeholder' => 'Direcciondenunciante']) }}
            {!! $errors->first('direccionDenunciante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celularDenunciante') }}
            {{ Form::text('celularDenunciante', $denunciante->celularDenunciante, ['class' => 'form-control' . ($errors->has('celularDenunciante') ? ' is-invalid' : ''), 'placeholder' => 'Celulardenunciante']) }}
            {!! $errors->first('celularDenunciante', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correoDenunciante') }}
            {{ Form::text('correoDenunciante', $denunciante->correoDenunciante, ['class' => 'form-control' . ($errors->has('correoDenunciante') ? ' is-invalid' : ''), 'placeholder' => 'Correodenunciante']) }}
            {!! $errors->first('correoDenunciante', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>