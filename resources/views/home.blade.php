@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        @auth
            <h1>Bem-vindo, {{ Auth::user()->name }}</h1>
        @endauth
    </div>
@endsection
