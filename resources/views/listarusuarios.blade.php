@extends('layouts.app')

@section('title', 'Listar Usuários')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="float-left">Usuários</h4>
                <a href="{{ route('register') }}" class="float-right">Novo usuário</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Usuário</th>
                            <th>Email</th>
                            <th>Função</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td><a href="{{ route('usuarios.editar', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->usuario }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
