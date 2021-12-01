@extends('layouts.app')

<div id="body">
    @include('include.manager.menu');
    <div class="container-fluid container-main pl-5 pr-5 mb-5 max-width-lg">

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

        <div class="modal fade" id="modalCreate" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ingresar un Evento</h5>
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
        <div class="modal fade" id="modalDate" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Fechas del evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('include.forms.form-add-date');
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEdit" tabindex="-1" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <div class="col-md-4 col-sm-12 mb-3">
                <button data-toggle="modal" type="button" class="btn btn-secondary text-white d-block" data-target="#modalCreate">Agregar Evento
                </button>
            </div>

            <div class="col-md-4 col-sm-12 mb-3">
                <button data-toggle="modal" type="button" class="btn btn-info text-white d-block ml-auto" data-target="#modalDate">Mostrar Fechas
                </button>
            </div>

            <div class="col-md-12 mt-4 mx-auto col-table shadow-sm">
                <table class="table table-striped rounded">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <?php
                        $url = '/events/' . $event->id . '/delete';
                        $id = 'modal-delete-' . $event->id;
                        ?>
                        @include('include.modals.modal-delete')
                        <tr>
                            <td scope="row">{{$event->title}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->date->date}}</td>
                            <td>{{$event->hour}}</td>
                            <td>
                                <a data-event="{{$event}}" href="#" class="btn-edit-event" data-toggle="modal" data-target="#modalEdit">
                                    <i class="fas fa-edit text-warning"></i>
                                </a>
                                <a data-id="{{$event->id}}" href="#" class="btn-delete-record">
                                    <i class="fas fa-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </form>

    </div>

</div>

@include('include.manager.scripts');