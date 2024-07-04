@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Editar Usuário</h5>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <form action="{{ route('usuarios.update', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $user->usuario }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label for="role">Função</label>
                        <input type="text" class="form-control" id="role" name="role" value="{{ $user->role }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
@endsection
