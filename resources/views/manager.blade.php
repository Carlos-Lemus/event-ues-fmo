@extends('layouts.app')

<div class="container-fluid container-manager p-5 mb-5">
    <form class="row row-form" enctype="multipart/form-data">
        <div class="col-4">
            <button id="btn-upload" type="button" class="btn btn-danger text-white">Agregar PDF</button>
        </div>

        <div class="custom-file mb-3 hidden">
            <input type="file" class="upload-file" id="upload-file" required>
            <label class="custom-file-label" for="upload-file">Elijir archivo...</label>
        </div>

        <div class="col-4">
            <select class="form-control" aria-label="Default select example">
                <option selected>Ordenar por</option>
                <option value="1">Fecha</option>
                <option value="2">Visitas</option>
                <option value="3">Tamaño</option>
            </select>
        </div>

    </form>

    <div class="row row-cols-1 row-cols-md-4 mt-4">
        <div class="col mb-4">
            <div class="card card-doc h-100">
                <a href="#">

                    <img src="/assets/images/pdf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">
                            Card title
                        </h5>
                    </div>
            </div>
            </a>
        </div>
        <div class="col mb-4">
            <div class="card card-doc h-100">
                <a href="#">

                    <img src="/assets/images/pdf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            Card title
                        </h5>
                    </div>
            </div>
            </a>
        </div>
        <div class="col mb-4">
            <div class="card card-doc h-100">
                <a href="#">

                    <img src="/assets/images/pdf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            Card title
                        </h5>
                    </div>
            </div>
            </a>
        </div>
        <div class="col mb-4">
            <div class="card card-doc h-100">
                <a href="#">

                    <img src="/assets/images/pdf.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            Card title
                        </h5>
                    </div>
            </div>
            </a>
        </div>
    </div>

</div>

<script src="{{ asset('js/manager.js') }}"></script>