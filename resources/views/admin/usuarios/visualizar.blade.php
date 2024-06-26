@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Visualizar Usuarios</h2>
       
    </div>

    <hr>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <td>{{$usuario->id}}</td>

        </tr>
        <tr>
            <th>Nome</th>
            <td>{{$usuario->nome}}</td>
        </tr>

        <tr>
            <th>email</th>
            <td>{{$usuario->email}}</td>
        </tr>

    </table>

    <a href="{{route('usuarios.edit', ['id' => $usuario->id])}}" class="btn btn-primary">Editar</a>
    <a href="{{route("usuarios.index")}}" class="btn btn-secondary">Cancelar</a>
@endsection
