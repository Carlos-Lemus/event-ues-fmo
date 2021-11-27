<header class="menu-header">
    <div class="icon__menu">
        <i class="fas fa-bars text-white" id="btn_open"></i>
    </div>
    <div>
        <a href="{{ route('logout') }}" class="btn btn-outline-danger text-white mr-4" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fas fa-sign-in-alt"></i> Cerrar sesion</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</header>

<div class="menu__side" id="menu_side">


    <div class="name__page">
        <img  src="/assets/images/logo/logo-menu.png" alt="">
        <h4>UES-<span>FMO</span></h4>
    </div>

    <div class="options__menu">

        <a href="#">
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