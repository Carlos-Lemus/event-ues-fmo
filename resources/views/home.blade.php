@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                    <button class="btn btn-primary text-white">Click</button>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<!--[if lte IE 9]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser. Please
    <a href="https://browsehappy.com/">upgrade your browser</a> to improve
    your experience and security.
</p>
<![endif]-->

@include("include.header")

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
                            <a href="https://www.youtube.com/watch?v=8qjSpwBrmto"
                                class="glightbox video btn"> Ver video<i class="lni lni-play"></i></a>
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

<!-- Start Achivement Area -->
<section id="fecha" class="our-achievement section overlay mb-5 call-action">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
            <div class="call-content">
                <h2>Noviembre 15, 2021 <br>10:30 AM</h2>
            </div>
        </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                    <h3 class="counter"><span id="days" class="countup" cup-end="0">00</span></h3>
                    <h4>Dias</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                    <h3 class="counter"><span id="hours" class="countup" cup-end="0">00</span></h3>
                    <h4>Horas</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                    <h3 class="counter"><span id="minutes" class="countup" cup-end="0">00</span></h3>
                    <h4>Minutos</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                    <h3 class="counter"><span id="seconds" class="countup" cup-end="0">00</span></h3>
                    <h4>Segundos</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Achivement Area -->

<!-- Start Courses Area -->
<section id="estudios" class="courses section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                        <i class="lni lni-graduation"></i>
                    </div>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Estudios y investigaciones</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc, in lacinia lacus mauris ut turpis. </p>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="assets/images/courses/courses-1.jpg" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Enfermades Renales en Oriente</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".4s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="assets/images/courses/courses-2.jpg" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Principales Enfermedades en Oriente</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".6s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="assets/images/courses/courses-3.jpg" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Principales Problemas de Salud en El Salvador</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="assets/images/courses/courses-4.jpg" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Causas de la Enfermedades renales en Oriente</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".4s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="assets/images/courses/courses-5.jpg" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Problemas Derivados por Covid 19 en Oriente</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Course -->
                    <div class="single-course wow fadeInUp" data-wow-delay=".6s">
                        <div class="course-image">
                            <a href="javascript:void(0)"><img src="assets/images/courses/courses-6.jpg" alt="#"></a>
                        </div>
                        <div class="content">
                            <h3><a href="javascript:void(0)">Estudio de la Pandemia en Oriente</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum, ligula cursus ornare rhoncus, eros purus gravida nunc</p>
                        </div>
                    </div>
                    <!-- End Single Course -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Courses Area -->

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