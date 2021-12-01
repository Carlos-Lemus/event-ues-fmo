<!-- Start About Us Area -->
<section class="programa pt-5 pb-5 mb-5">
    <section class="contenido-evento">
        <div class="container contenedor shadow-lg rounded">
            <h2 class="title-calendar mb-3">Calendario de las conferencias</h2>
            <nav class="menu-programa mb-3">

                <?php
                setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish');
                ?>

                @foreach($dates as $date)
                <?php

                $dateFormat = strftime('%d %B',strtotime($date->date));;

                ?>
                <a data-day="{{$date->date}}" class="day-event" href="#" aria-hidden="true"><i class="fas fa-calendar"></i> {{$dateFormat}}</a>
                @endforeach
            </nav>

            @foreach($events as $day => $events_list)
            <div id="{{$day}}" class="info-evento event-active">

                @foreach($events_list as $event)

                <div class="detalle-evento">
                    <p><i class="fas fa-clock"></i> Hora: {{$event->hour}}</p>
                    <p><i class="fas fa-university"></i> Tema: {{$event->title}}</p>
                    <p><a href="{{ $event->link }}"><i class="fas fa-link"></i> Enlace de la conferencia</a></p>
                </div>

                <hr />
                @endforeach

            </div>

            @endforeach

    </section>
</section>