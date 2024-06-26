@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Usuarios</h2>

    </div>

    <hr>
    <form action="{{ route('usuarios.store')}}" method="post">
        <div class="mb-3">
            <label for="name"  class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="nome" placeholder="Nome">             
        </div>

        <div class="mb-3">
            <label for="email"  class="form-label">E-MAIL</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail">             
        </div>

        <div class="mb-3">
            <label for="senha"  class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">             
        </div>

        <div class="mb-3">
            <label for="comfirmar_senha"  class="form-label">comfirmar senha</label>
            <input type="password" name="comfirmar_senha" class="form-control" id="comfirmar_senha" placeholder="comfirmar senha">             
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route("usuarios.index")}}" class="btn btn-secondary">Cancelar</a>
    
    </form>



@endsection
