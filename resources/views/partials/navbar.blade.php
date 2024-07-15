<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="{{ url('/home') }}">
        <img src="{{ asset('images/logoindiana.png') }}" alt="Logo" style="height: 30px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            @auth
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'separacao')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Separação
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                @endif
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'embalagem')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Embalagem
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="{{ route('listar.almoxarifado') }}">Almoxarifado</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                @endif
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'expedicao')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Expedição
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                @endif
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('listar.usuarios') }}">Usuários</a>
                    </li>
                @endif
            @endauth
        </ul>
        <ul class="navbar-nav ml-auto">
            @guest
                <!-- Show login/register links here if needed -->
            @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownUser" role="button" data-toggle="dropdown" aria-expanded="false">
                        @php
                            $name = Auth::user()->name;
                            $initials = '';
                            foreach (explode(' ', $name) as $word) {
                                $initials .= strtoupper($word[0]);
                            }
                        @endphp
                        <div class="initials-circle">
                            {{ $initials }}
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownUser">
                        <div class="dropdown-header user-name">{{ Auth::user()->name }}</div>
                        <div class="dropdown-header user-email">{{ Auth::user()->email }}</div>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="dropdown-item btn-logout">Sair</button>
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
