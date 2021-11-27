<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EventController;
use App\Models\Document;
use App\Models\Event;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    try {
        $events = Event::orderBy('hour')->get()->groupBy(function ($data) {
            return $data->date;
        });

        $docs = Document::orderBy('id', 'DESC')->skip(0)->take(6)->get();

        return view('home', compact(['docs', 'events']));
    } catch (Exception $ex) {
        
        $events = Array();

        $docs = Array();

        return view('home', compact(['docs', 'events']));
    }
});

Route::get('/home', function () {
    return view('manager');
});

// Route::get('/', 'HomeController@index');
Auth::routes();

// Routes Documents
Route::get('/documents', [DocumentController::class, 'index'])->middleware('auth');
Route::get('/showDocument/{id}', [DocumentController::class, 'showDocument'])->middleware('auth');
Route::post('/upload-doc', [DocumentController::class, 'insert']);
Route::post('/documents/{id}/update', [DocumentController::class, 'update']);
Route::get('/documents/{id}/delete', [DocumentController::class, 'delete']);

// Routes Events
Route::get('/events', [EventController::class, 'index'])->middleware('auth');
Route::post('/new-event', [EventController::class, 'insert']);
Route::post('/events/{id}/update', [EventController::class, 'update']);
Route::get('/events/{id}/delete', [EventController::class, 'delete']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
