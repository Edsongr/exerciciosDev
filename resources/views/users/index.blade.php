@extends('layouts.app')
@section('title')
    <h1><i class="fas fa-chalkboard-teacher"></i> | Usuários</h1>
@endsection
@section('content')
<div class="card container">

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible fade in show margimTop" role="alert">
    {{ Session::get('error') }}
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade in show margimTop" role="alert">
    {{ Session::get('success') }}
</div>
@endif

<div class="card-body">
    <table id="table" data-toggle="table" class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CEP</th>
                <th class="text-center" style="min-width: 135px">
                    <a title="Cadastrar Novo Usuário" href="/users/create" class="btn btn-success"><i class="fas fa-plus"></i></a>
                </th>
            </tr>
        </thead>
        <body>
            @foreach($lists as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td> {{ $user->email }}</td>
                    <td>{{ $user->zipCode }} </td>
                    <td class="text-center">
                        <a title="Editar Usuário" href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            @endforeach
        </body>
    </table>

    </div>
</div>
@endsection

