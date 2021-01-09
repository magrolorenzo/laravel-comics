<?php

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
    $comics = config("comics");
    $data =[
        'comics' => $comics
    ];
    return view('homepage', $data);
})->name("home");

Route::get('/comic-infos/{id}', function ($id) {
    // Recupero l'array dei fumetti
    $comics = config("comics");
    // con l'id recupero le info del fumetto
    if(array_key_exists($id, $comics)){
        $fumetto = $comics[$id];
        $data =[
            'comic' => $fumetto
        ];
        return view('comic-infos', $data);
    }
    return abort(404);
})->name("infos");
