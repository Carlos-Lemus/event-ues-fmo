<form class="form-modal" action="{{url('new-event')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="recipient-name" class="col-form-label">Titulo:</label>
        <input name="title" id="title" type="text" class="form-control" id="txt-title">
    </div>
    <div class="form-group">
        <label for="message-text" class="col-form-label">Descripcion:</label>
        <textarea name="description" id="description" class="form-control" id="txt-description"></textarea>
    </div>

    <div class="form-group">
        <label for="message-text" class="col-form-label">Enlace del evento:</label>
        <input name="link" type="text" class="form-control" id="txt-title">
    </div>

    <div class="form-group">
        <div class="form-group">
            <select class="form-control" name="date" aria-label="Fechas">
                <option value="-1" selected>Selecciona una fecha</option>
                @foreach($dates as $date)
                <option value="{{$date->id}}">{{$date->date}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="form-group">
            <label>Hora del evento</label>
            <input type="time" min="00:00" max="24:00" name="hour" class="form-control">
        </div>
    </div>

    <div class="alert alert-danger mt-3 hidden" role="alert">
        Debes llenar los campos obligatorios
    </div>

    <div class="modal-footer mt-3">
        <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Cancelar</button>
        <button type="button" id="btn-modal" class="btn btn-secondary btn-submit">Guardar</button>
    </div>
</form>