@extends('layouts.app')
@section('title')
    <h1><i class="fas fa-chalkboard-teacher"></i> | DML</h1>
@endsection
@section('content')
<div class="card container">

    <div class="card-body">
        <!-- TABELA USUÁRIOS / Employee -->
        <table data-toggle="table" class="table table-striped mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <body>
                @foreach($employees as $emp)
                    <tr>
                        <td>{{ $emp->id }}</td>
                        <td>{{ $emp->cpf }}</td>
                        <td>{{ $emp->name }}</td>
                    </tr>
                @endforeach
            </body>
        </table>

        <hr>

        <!-- TABELA INFOS -->
        <table data-toggle="table" class="table table-striped  mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>CPF</th>
                    <th>GENERO</th>
                    <th>ANO NASCIMENTO</th>
                </tr>
            </thead>
            <body>
                @foreach($infos as $info)
                    <tr>
                        <td>{{ $info->id }}</td>
                        <td>{{ $info->cpf }}</td>
                        <td>{{ $info->genero }}</td>
                        <td>{{ $info->ano_nascimento }}</td>
                    </tr>
                @endforeach
            </body>
        </table>

        <!-- TABELA RESULTADOS -->
        <table data-toggle="table" class="table table-striped  mt-5">
            <thead class="thead-dark">
                <tr>
                    <th>USUÁRIO</th>
                    <th>MAIOR 50 ANOS</th>
                </tr>
            </thead>
            <body>
                @foreach($infosEmployees as $infEmp)
                    <tr>
                        <td>{{ $infEmp->name }}</td>
                        <td>{{ $infEmp->maiorCinquenta }}</td>
                    </tr>
                @endforeach
            </body>
        </table>

    </div>

</div>
@endsection

