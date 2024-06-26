@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Usuarios</h2>

    </div>

    <hr>
    <form>
        <div class="mb-3">
            <label for="name"  class="form-label">Nome</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nome">             
        </div>

        <div class="mb-3">
            <label for="email"  class="form-label">E-MAIL</label>
            <input type="text" name="name" class="form-control" id="email" placeholder="E-mail">             
        </div>

        <div class="mb-3">
            <label for="senha"  class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">             
        </div>

        <div class="mb-3">
            <label for="comfirmar_senha"  class="form-label">comfirmar senha</label>
            <input type="password" name="comfirmar_senha" class="form-control" id="comfirmar_senha" placeholder="comfirmar senha">             
        </div>
    </form>



    <a href="/admin/usuarios/" class="btn btn-primary">Salvar</a>
    <a href="/admin/usuarios/" class="btn btn-secondary">Cancelar</a>
@endsection
