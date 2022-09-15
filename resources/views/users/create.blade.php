@extends('layouts.app')
@section('title')
<h1><i class="fas fa-chalkboard-teacher"></i> | Cadastro Usuário</h1>
@endsection
@section('content')

<div class="container">
    {!! Form::open(['url' => route('users.store'), 'class' => 'form-horizontal', 'id'=>'formUsers']) !!}
    <div class="card-create">
 
        <div class="card-create-header">
            <h2><i class="fas fa-user-plus"></i> Cadastro Usuário</h2>
        </div>
        <hr>
        <div class="card-create-body">
            @include("users._form")
        </div>
        <hr>
        <div class="card-create-footer">
            <div class="row">
                <div class="col col-md-12 text-right">
                    <a href="/users/" class="btn btn-danger">Fechar</a>
                    <span class="btn btn-success" onclick="checkForm()">Salvar</span>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@endsection