<!-- resources/views/partials/header.blade.php -->

<div class="container" >
    <div class="row">
        <div class="col">
            <h4 class="float-left">Usuários</h4>
            <a href="{{ route('register.usuarios') }}" class="float-right">Novo usuário</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <nav class="navbar bg-body-tertiary">
                <form class="d-flex ms-auto" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </nav>
        </div>
    </div>
</div>
