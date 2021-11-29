@extends('layouts.app')

<div id="body">
    @include('include.manager.menu');

    <div class="container-fluid container-main pl-5 pr-5 mb-5 max-width-lg">
        <div class="h-75 d-flex align-items-center justify-content-center">
            <div class="row">

                <div class="col-md-6 col-sm-12 mb-3">
                    <h1 class="text-primary h1 font-weight-bold mb-3">Bienvenido</h1>
                    <p class="font-weight-bold mb-3">Aqui podras gestionar la información del evento</p>

                    <div class="row mx-auto">
                        <div class="col-sm-12 mb-2 p-0">
                            <a href="{{ url('/documents') }}">Gestionar Documentos</a>
                        </div>
                        <div class="col-sm-12 mb-2 p-0">
                            <a href="{{ url('/events') }}">Gestionar Eventos</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-3">
                    <img src="/assets/images/manager.png" class="w-100 rounded" alt="">
                </div>
            </div>

        </div>
    </div>

</div>

@include('include.manager.scripts')