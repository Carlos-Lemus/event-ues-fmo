@extends('layouts.app')

@section('content')


<!-- <div class="container-toast-error p-3"> -->

<!-- </div> -->


@include("include.header")

@if (isset($msgConnection))
<div id="liveToast" class="toast hide toast-error shadow" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="toast-header">
        <strong class="mr-auto text-danger"><i class="fas fa-exclamation-triangle mr-1"></i>Error</strong>
    </div>
    <div class="toast-body">
        {{$msgConnection}}
    </div>
</div>
@endif

<!-- Start Hero Area -->
<section class="hero-area">
    <div class="hero-slider">
        <!-- Single Slider -->
        <div class="hero-inner overlay" style="background-image: url('assets/images/hero/slider-bg1.jpg');">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 offset-lg-2 col-md-12 co-12">
                        <div class="home-slider">
                            <div class="hero-text">
                                <h5 class="wow fadeInUp" data-wow-delay=".3s">Expande tu conocimiento</h5>
                                <h1 class="wow fadeInUp" data-wow-delay=".5s">Estudios y investigaciones <br> Realizados por
                                    la UES-FMO</h1>
                                <p class="wow fadeInUp" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum,<br> ligula cursus ornare rhoncus, eros purus gravida nunc,<br> in lacinia lacus mauris ut turpis. Proin nec placerat nibh
                                </p>
                                <div class="button wow fadeInUp" data-wow-delay=".9s">
                                    <a href="javascript:void(0)" class="btn">Leer mas</a>
                                    <a href="courses-grid.html" class="btn alt-btn">Ver estudios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
        <!-- Single Slider -->
        <div class="hero-inner overlay" style="background-image: url('assets/images/hero/slider-bg2.jpg');">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 offset-lg-2 col-md-12 co-12">
                        <div class="home-slider">
                            <div class="hero-text">
                                <h5 class="wow fadeInUp" data-wow-delay=".3s">Expande tu conocimiento</h5>
                                <h1 class="wow fadeInUp" data-wow-delay=".5s">Eventos y fechas<br>Que se Realizaran</h1>
                                <p class="wow fadeInUp" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum,<br> ligula cursus ornare rhoncus, eros purus gravida nunc,<br> in lacinia lacus mauris ut turpis. Proin nec placerat nibh
                                </p>
                                <div class="button wow fadeInUp" data-wow-delay=".9s">
                                    <a href="javascript:void(0)" class="btn">Leer mas</a>
                                    <a href="events-grid.html" class="btn alt-btn">Ver eventos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
        <!-- Single Slider -->
        <div class="hero-inner overlay" style="background-image: url('assets/images/hero/slider-bg3.jpg');">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 offset-lg-2 col-md-12 co-12">
                        <div class="home-slider">
                            <div class="hero-text">
                                <h5 class="wow fadeInUp" data-wow-delay=".3s">Expande tu conocimiento</h5>
                                <h1 class="wow fadeInUp" data-wow-delay=".5s">Investigacion de Insuficiencia <br> Renal en Oriente
                                </h1>
                                <p class="wow fadeInUp" data-wow-delay=".7s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum,<br> ligula cursus ornare rhoncus, eros purus gravida nunc,<br> in lacinia lacus mauris ut turpis. Proin nec placerat nibh
                                </p>
                                <div class="button wow fadeInUp" data-wow-delay=".9s">
                                    <a href="javascript:void(0)" class="btn">Leer mas</a>
                                    <a href="#" class="btn alt-btn">Ver estudio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Single Slider -->
    </div>
</section>
<!--/ End Hero Area -->

<!-- Start About Us Area -->
<section id="acerca" class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="about-title align-left">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Acerca de nosotros</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Bienvenido al evento!</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut
                            enim ad min im veniam, quis nostrud exercitati ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</p>
                        <p class="qote wow fadeInUp" data-wow-delay=".8s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="button wow fadeInUp" data-wow-delay="1s">
                            <a href="javascript:void(0)" class="btn">Leer mas</a>
                            <a href="https://www.youtube.com/watch?v=8qjSpwBrmto" class="glightbox video btn"> Ver video<i class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                    <img src="assets/images/about/about-img2.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End About Us Area -->

@include("include.calendar")

@include("include.studies")

<!-- Start Call To Action Area -->
<section id="detalles" class="call-action section overlay">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="call-content">
                    <span>Organiza UES-FMO</span>
                    <h2>Ingresa para ver todo <br> los detalles del evento</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum,<br> ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                    <div class="button">
                        <a href="javascript:void(0)" class="btn">Ver ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Call To Action Area -->

@include("include.footer")

<!-- ========================= scroll-top ========================= -->
<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>

@endsection