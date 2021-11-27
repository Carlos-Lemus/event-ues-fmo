<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Exception;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index()
    {
        $events = Event::all()->sortBy('date');

        return view('events', compact('events'));
    }

    public function insert(Request $request)
    {
        try {
            $data = new Event();

            $data->title = $request->title;
            $data->description = $request->description;
            $data->link = $request->link;
            $data->date = $request->date;
            $data->hour = $request->hour;

            $data->save();

            return redirect()->back()->with('msgSuccess', 'Se creo el evento correctamente');
        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo insertar el evento');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = Event::find($id);

            $data->title = $request->title;
            $data->description = $request->description;
            $data->link = $request->link;
            $data->date = $request->date;
            $data->hour = $request->hour;

            $data->update();

            return redirect()->back()->with('msgSuccess', 'Se actualizo el evento correctamente');

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo actualizar el evento');
        }
    }

    public function delete($id)
    {
        try {
            $event = Event::find($id);

            $event->delete();

            return redirect()->back()->with('msgSuccess', 'Se elimino el evento correctamente');

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo eliminar el evento');
        }
    }
}
