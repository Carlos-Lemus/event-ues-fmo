@extends('layouts.app')

<div id="body">
    @include('include.manager.menu')

    <div class="container-fluid container-main p-5 mb-5 max-width-lg">

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

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Agregar Documento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('include.forms.form-add-document')
                    </div>
                </div>
            </div>
        </div>

        <form class="row row-form" enctype="multipart/form-data">
            <div class="col-md-4 col-sm-12 mb-3">
                <button id="btn-upload" type="button" class="btn btn-secondary text-white d-block" data-toggle="modal" data-target="#staticBackdrop">Agregar Documento</button>
            </div>

            <div class="col-md-4 col-sm-12 mb-3">
                <select class="form-control" aria-label="Default select example">
                    <option selected>Ordenar por</option>
                    <option value="1">Fecha</option>
                    <option value="2">Visitas</option>
                    <option value="3">Tamaño</option>
                </select>
            </div>

        </form>

        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 mt-4">
            @foreach($docs as $doc)

            <?php
            $url = '/documents/' . $doc->id . '/delete';
            $id = 'modal-delete-' . $doc->id;
            ?>
            <div class="col mb-4">
                @include('include.modals.modal-delete')
                <div data-id="{{$doc->id}}" class="card card-doc h-100 mx-auto">

                    <!-- Start Toast -->
                    <div id="toast-{{$doc->id}}" class="toast toast-doc hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
                        <div class="toast-header">
                            <strong class="mr-auto">Opciones</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            <a target="_blankx" href="{{$doc->file}}" class="mb-2">Ver detalles</a>
                            <a href="{{ url('/showDocument/'.$doc->id) }}" class="btn btn-warning rounded"><i class="fas fa-edit text-white"></i></a>
                            <a data-id="{{$doc->id}}" href="#" class="btn btn-danger btn-delete-record">
                                <i class="fas fa-trash text-white"></i>
                            </a>
                        </div>
                    </div>

                    <!-- end Toast -->

                    <img src="/assets/images/pdf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">
                            {{$doc->title}}
                        </h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</div>



@include('include.manager.scripts')