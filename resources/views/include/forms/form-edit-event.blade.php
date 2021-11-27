<form class="form-modal form-event-edit" action="" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="recipient-name" class="col-form-label" >Titulo:</label>
        <input required id="edit-title" name="title" id="title" type="text" class="form-control" id="txt-title">
    </div>
    <div class="form-group">
        <label for="message-text" class="col-form-label">Descripcion:</label>
        <textarea id="edit-description" name="description" id="description" class="form-control" id="txt-description"></textarea>
    </div>

    <div class="form-group">
        <label for="message-text" class="col-form-label">Enlace del evento:</label>
        <input required id="edit-link" name="link" type="text" class="form-control" id="txt-title">
    </div>

    <div class="form-group">
        <div class="form-group">
            <label>Fecha del evento</label>
            <input required type="date" id="edit-date" name="date" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <div class="form-group">
            <label>Hora del evento</label>
            <input required type="time" min="00:00" max="24:00" id="edit-hour" name="hour" class="form-control">
        </div>
    </div>

    <div class="modal-footer mt-3">
        <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Close</button>
        <button type="submit" id="btn-upload" class="btn btn-primary">Actualizar</button>
    </div>
</form>