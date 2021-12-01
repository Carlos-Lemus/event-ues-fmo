<form class="form-modal" action="{{url('new-date')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group col-12">
        <label>Fechas del evento</label>
        <input type="date" name="date" class="form-control">
    </div>
    <div class="col-12">
        <button type="button" class="btn btn-secondary btn-submit mx-auto">Agregar</button>
    </div>

    <div class="alert alert-danger mt-3 hidden" role="alert">
        Debes llenar los campos obligatorios
    </div>

    <div class="col-md-12 mt-4 mx-auto col-table shadow-sm">
        <table class="table table-striped rounded">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody class="overflow-scroll">
                @foreach($dates as $date)
                <tr>
                    <td scope="row">{{$date->date}}</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ url('/dates/'.$date->id.'/delete') }}">
                            <i class="fas fa-trash text-danger mx-auto"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</form>