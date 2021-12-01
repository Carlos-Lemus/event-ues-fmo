<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Exception;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function insert(Request $request)
    {
        try {
            $data = new Date();

            $data->date = $request->date;

            $data->save();

            return redirect()->back()->with('msgSuccess', 'Se creo la fecha correctamente');
        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo insertar la fecha');
        }
    }

    public function delete($id)
    {
        try {
            $data = Date::find($id);

            $data->delete();

            return redirect()->back()->with('msgSuccess', 'Se elimino la fecha correctamente');

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo eliminar la fecha');
        }
    }
}
