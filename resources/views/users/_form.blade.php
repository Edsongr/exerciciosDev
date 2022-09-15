@if ($errors->any())
<div class="row">
    <div class="col col-sm-12">
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $erro)
            {{ $erro }} <br>
            @endforeach
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-sm-6 col-xs-12">
        {!! Form::label('name', 'Nome Completo*:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-3 col-xs-12">
        {!! Form::label('userName', 'Nome de login*:', ['class' => 'control-label']) !!}
        {!! Form::text('userName', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-3 col-xs-12">
        {!! Form::label('zipCode', 'CEP:', ['class' => 'control-label']) !!}
        {!! Form::text('zipCode', null, ['class'=>'form-control', 'onkeyup'=>'maskCep(this.value)', 'maxlength'=>'9']) !!}
    </div>

    <div class="col-sm-6 col-xs-12">
        {!! Form::label('email', 'E-Mail:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-6 col-xs-12">
        <label for="password" class="control-label">Senha: <i class='fas fa-question-circle' style='font-size:16px;color:red' title="(8 caracteres mínimo, contendo pelo menos 1 letra e 1 número)"></i></label>
        {!! Form::text('password', null, ['class'=>'form-control', 'id'=>'password']) !!}
    </div>
  
</div>
