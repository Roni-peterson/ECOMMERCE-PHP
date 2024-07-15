<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h4 class="float-left">Almoxarifado</h4>
            <a href="{{ route('almox.create') }}" class="float-right">Cadastrar Almoxarifado</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <nav class="navbar bg-body-tertiary">
                @if (!in_array(Route::currentRouteName(), ['almox.edit', 'almox.update']))
                    <form class="d-flex ms-auto" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                @endif
            </nav>
        </div>
    </div>
</div>
