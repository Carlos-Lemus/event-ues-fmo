@extends('layouts.app')

<div id="body">
    @include('include.manager.menu');
    <div class="container-fluid container-manager pl-5 pr-5 mb-5">

        @if (session('msgSuccess'))
        <div class="row alert alert-success">
            {{ session('msgSuccess') }}
        </div>
        @endif

        @if (session('msgError'))
        <div class="row alert alert-danger" role="alert">
            {{ session('msgError') }}
        </div>
        @endif

        <div class="modal fade" id="modalCreate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ingresa un Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('include.forms.form-add-event');
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('include.forms.form-edit-event');
                    </div>
                </div>
            </div>
        </div>

        <form class="row row-form" enctype="multipart/form-data">
            <div class="col-4">
                <button data-toggle="modal" type="button" class="btn btn-danger text-white" data-target="#modalCreate">Agregar Evento
                </button>
            </div>

            <table class="table mt-4 shadow-lg">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre del evento</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td scope="row">{{$event->title}}</td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->hour}}</td>
                        <td>
                            <a data-event="{{$event}}" href="#" class="btn-edit-event" data-toggle="modal" data-target="#modalEdit">
                                <i class="fas fa-edit text-warning"></i>
                            </a>
                            <a href="{{ url('/events/'.$event->id.'/delete') }}">
                                <i class="fas fa-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </form>

    </div>

</div>

@include('include.manager.scripts');