<header class="menu-header shadow-sm">
    <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
    </div>
    <div>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger mr-4" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i> Cerrar sesion</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</header>

<div class="menu__side" id="menu_side">


    <div class="name__page">
        <img src="/assets/images/logo/logo-menu.png" alt="">
        <h4><span>UES</span>-FMO</h4>
    </div>

    <div class="options__menu">

        <a href="{{ url('/home') }}">
            <div class="option">
                <i class="fas fa-home" class="text-white" title="Inicio"></i>
                <h4>Inicio</h4>
            </div>
        </a>

        <a href="{{ url('/documents') }}">
            <div class="option">
                <i class="far fa-file-pdf" class="text-white" title="Portafolio"></i>
                <h4>Documentos</h4>
            </div>
        </a>

        <a href="{{ url('/events') }}">
            <div class="option">
                <i class="fas fa-calendar" class="text-white" title="Cursos"></i>
                <h4>Eventos</h4>
            </div>
        </a>
    </div>

</div>

<!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm"> -->
<!-- <div class="container"> -->
<!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

<!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
<!-- Left Side Of Navbar -->
<!-- <ul class="navbar-nav mr-auto"> -->

<!-- </ul> -->

<!-- Right Side Of Navbar -->
<!-- <ul class="navbar-nav ml-auto"> -->
<!-- Authentication Links -->
<!-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->