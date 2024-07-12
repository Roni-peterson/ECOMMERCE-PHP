@extends('layouts.app')

@section('title', 'Listar Usuários')

@section('content')
    @include('partials.header')
    <div class="container">
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
