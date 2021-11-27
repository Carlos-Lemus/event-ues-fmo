<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    public function index()
    {
        $docs = Document::all();

        return view('documents', compact('docs'));
    }

    public function showDocument($id)
    {
        try {

            $doc = Document::find($id);
    
            return view('view-document', compact('doc'));

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo obtener el documento');
        }

    }

    public function insert(Request $request)
    {
        try {

            $data = new Document();

            $imageName = 'default.jpg';
    
            $pathDocument = '/assets/documents/';
            $pathImage = '/assets/images_documents/';
            
            $data->title = $request->title;
            $data->description = $request->description;

            if($request->file('doc') == null) {
                return redirect()->back()->with('msgError', "Debe agregar un documento");
            }

            if($request->file('image') != null) {
                $image = $request->image;
                $imageName = $data->title.'.'.$image->getClientOriginalExtension();
                $request->image->move('assets/images_documents', $imageName);
            }

            $file = $request->doc;
            $fileName = $data->title.'.'.$file->getClientOriginalExtension();
            
            
            $data->file = $pathDocument.$fileName;
            $data->image = $pathImage.$imageName;
            
            $data->save();

            $request->doc->move('assets/documents', $fileName);
            
            return redirect()->back()->with('msgSuccess', 'Se creo el documento correctamente');

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo insertar el documento');
        }

    }
    
    public function update(Request $request, $id)
    {
        try {

            $data = Document::find($id);
            
            $pathImage = '/assets/images_documents/';
            
            $data->title = $request->title;
            $data->description = $request->description;
            
            if($request->file('image') != null) {
                File::delete(public_path($data->image));
                $image = $request->image;
                $imageName = $data->title.'.'.$image->getClientOriginalExtension();
                $request->image->move('assets/images_documents', $imageName);
                $data->image = $pathImage.$imageName;
            }
            
            $data->update();

            return redirect()->back()->with('msgSuccess', 'Se actualizo el documento correctamente');

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo actualizar el documento');
        }


    }

    public function delete($id)
    {
        try {

            $data = Document::find($id);
            
            File::delete(public_path($data->file));

            if($data->image != "/assets/images_documents/default.jpg") {
                File::delete(public_path($data->image));
            }

            $data->delete();

            return redirect()->back()->with('msgSuccess', "Se elimino el documento correctamente");

        } catch (Exception $ex) {
            return redirect()->back()->with('msgError', 'Error: No se pudo eliminar el documento');
        }

    }
}
