<form class="form-modal" action="{{url('upload-doc')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="recipient-name" class="col-form-label" >Titulo:</label>
        <input name="title" id="title" type="text" class="form-control" id="txt-title">
    </div>
    <div class="form-group">
        <label for="message-text" class="col-form-label" >Descripcion:</label>
        <textarea name="description" id="description" class="form-control" id="txt-description"></textarea>
    </div>
    <div class="form-group custom-file mb-3">
        <input type="file" name="doc" id="doc"  accept=".pdf">
        <label class="custom-file-label" for="doc">Elejir documento...</label>
    </div>

    <div class="form-group custom-file">
        <input type="file" name="image" id="image"  accept="image/*">
        <label class="custom-file-label" for="image">Elejir imagen...</label>
    </div>

    <div class="alert alert-danger mt-3 hidden" role="alert">
        Debes llenar los campos obligatorios
    </div>

    <div class="modal-footer mt-3">
        <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btn-modal" class="btn btn-secondary btn-submit">Guardar</button>
    </div>


</form>