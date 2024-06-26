@extends("admin.dashboard")

@section("conteudo")

<div class="d-flex justify-content-between mt-3">
    <h2>Lista de Usuarios</h2>
    <a href="{{route('usuarios.create')}}" class="btn btn-primary">Cadastrar</a>
  </div>

  <hr>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
       
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ação</th>

      </tr>
    </thead>
    <tbody>

      @foreach ($usuarios as $user)
        
      
      <tr>
        <td>{{$user->id}}</td>
       
        <td>{{$user->nome}}</td>
        <td>{{$user->email}}</td>
        <td>
          <a href="{{route("usuarios.show" , ['id' => 1])}}" class="btn btn-primary">Visualizar</a>
          <a href="{{route("usuarios.edit" , ['id' => 1])}}" class="btn btn-secondary">Editar</a>
          <a href="deletar.php" class="btn btn-danger">Excluir</a>
        </td>
      </tr>

      @endforeach
     
    </tbody>
  </table>

  @endsection
