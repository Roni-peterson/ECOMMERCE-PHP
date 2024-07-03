@extends('layouts.app')

@section('title', 'Listar_Usuarios')

@section('content')
    <div class="container">
        @auth
            <h1>Bem-vindo</h1>
        @endauth
    </div>
@endsection
