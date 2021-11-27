@extends('layouts.app')

<div class="container-fluid mx-auto">

    <header class="header-doc">
        <navbar class="navbar-doc">
            <a href="/documents" class="btn btn-primary text-white ml-4">
                <i class="fas fa-arrow-left"></i>
                Regresar
            </a>

            <div>
                <button type="button" class="btn btn-warning btn-edit-document rounded text-white mr-4">Editar</button>
            </div>
        </navbar>
    </header>

    <div class="row mt-3">

        @if (session('msgSuccess'))
        <div class="col-7 mx-auto alert alert-success">
            {{ session('msgSuccess') }}
        </div>
        @endif

        @if (session('msgError'))
        <div class="col-7 mx-auto alert alert-danger" role="alert">
            {{ session('msgError') }}
        </div>
        @endif

        <form class="col-md-7 col-xs-11 p-3 mx-auto form-edit-document" action="{{ url('/documents/'.$doc->id).'/update' }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="text-muted text-center">Editar Documento</h3>

            <div class="alert alert-danger mt-3 hidden" role="alert">
                Debes llenar los campos obligatorios
            </div>

            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Titulo:</label>
                <input name="title" value="{{$doc->title}}" id="title" type="text" class="form-control" id="txt-title">
            </div>
            <div class="form-group">
                <label for="message-text" class="col-form-label">Descripcion:</label>
                <textarea name="description" value="" id="description" class="form-control" id="txt-description">{{$doc->description}}</textarea>
            </div>
            <div class="form-group custom-file mb-5">
                <input type="file" name="image" id="image" required>
                <label class="custom-file-label" for="image">Elejir imagen...</label>
            </div>
            <img class="img-view-doc" src="{{$doc->image}}" alt="">
        </form>

        <!-- <div class="col-12 p-5">
            <iframe class="iframe-doc col-12" src="/assets/documents/{{$doc->file}}" frameborder="0"></iframe>
        </div> -->
    </div>

</div>

@include('include.manager.scripts');