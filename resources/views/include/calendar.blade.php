<!-- Start About Us Area -->
<section class="programa pt-5 pb-5 mb-5">
    <section class="contenido-evento">
        <div class="container contenedor shadow-lg rounded">
            <h2 class="title-calendar mb-3">Calendario de las conferencias</h2>
            <nav class="menu-programa mb-3">
                <a id="day-martes" href="#Martes" aria-hidden="true"><i class="fas fa-calendar"></i> Martes</a>
                <a id="day-miercoles" href="#Miercoles" aria-hidden="true"><i class="fas fa-calendar"></i> Miercoles</a>
                <a id="day-jueves" href="#Jueves" aria-hidden="true"><i class="fas fa-calendar"></i> Jueves</a>
                <a id="day-viernes" href="#Viernes" aria-hidden="true"><i class="fas fa-calendar"></i> Viernes</a>
            </nav>

            @foreach($events as $day => $events_list)

            @if($day == '2021-11-23')

            <div id="martes" class="info-evento event-active">

                @foreach($events_list as $event)

                <div class="detalle-evento">
                    <p><i class="fas fa-clock"></i> Hora: {{$event->hour}}</p>
                    <p><i class="fas fa-university"></i> Tema: {{$event->title}}</p>
                    <p><a href="{{ $event->link }}"><i class="fas fa-link"></i> Enlace de la conferencia</a></p>
                </div>

                <hr />
                @endforeach

            </div>

            @endif
            @if($day == '2021-11-24')

            <div id="miercoles" class="info-evento event-active">

                @foreach($events_list as $event)

                <div class="detalle-evento">
                    <p><i class="fas fa-clock"></i> Hora: {{$event->hour}}</p>
                    <p><i class="fas fa-university"></i> Tema: {{$event->title}}</p>
                    <p><a href="{{ $event->link }}"><i class="fas fa-link"></i> Enlace de la conferencia</a></p>
                </div>

                <hr />
                @endforeach

            </div>

            @endif
            @if($day == '2021-11-25')

            <div id="jueves" class="info-evento event-active">

                @foreach($events_list as $event)

                <div class="detalle-evento">
                    <p><i class="fas fa-clock"></i> Hora: {{$event->hour}}</p>
                    <p><i class="fas fa-university"></i> Tema: {{$event->title}}</p>
                    <p><a href="{{ $event->link }}"><i class="fas fa-link"></i> Enlace de la conferencia</a></p>
                </div>

                <hr />
                @endforeach

            </div>

            @endif
            @if($day == '2021-11-26')

            <div id="viernes" class="info-evento event-active">

                @foreach($events_list as $event)

                <div class="detalle-evento">
                    <p><i class="fas fa-clock"></i> Hora: {{$event->hour}}</p>
                    <p><i class="fas fa-university"></i> Tema: {{$event->title}}</p>
                    <p><a href="{{ $event->link }}"><i class="fas fa-link"></i> Enlace de la conferencia</a></p>
                </div>

                <hr />
                @endforeach

            </div>

            @endif

            @endforeach

    </section>
</section>