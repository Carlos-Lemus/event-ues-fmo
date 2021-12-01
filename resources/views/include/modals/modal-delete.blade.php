<div id="{{$id}}" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¿Estas seguro?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>No podras recuperar los registros eliminados!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary text-white" data-dismiss="modal">Cancelar</button>
                <a href="{{ url($url) }}" class="btn btn-danger text-white">Eliminar</a>
            </div>
        </div>
    </div>
</div>