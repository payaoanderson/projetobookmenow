@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Usuarios</h2>

    </div>

    <hr>

    @if ($errors->any())

    <div class="boxError alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>     
            @endforeach
           
        </ul>

    </div>
        
    @endif
    <form action="{{ route('usuarios.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="{{old("nome")}}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-MAIL</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="E-mail"  value="{{old("email")}}">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Senha">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">confirmar senha</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"
                placeholder="confirmar senha">
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Cancelar</a>

    </form>
@endsection
