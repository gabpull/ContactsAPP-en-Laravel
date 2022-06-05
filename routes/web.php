<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Http\Controllers;
use App\Http\Controllers\ContactController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*Route::middleware('auth')->group(function(){
    Route::resource('/contacts', ContactController::class, 'index');
});*/

//Route::view('/contacts', 'contacts.index');

/*Route::get('/hola', function(){
    return "Hola Mundo";
});

Route::get('/holass', function(){
    return view('contacts.index');
});*/

//Route::get('/contactos', [ContactController::class, 'index'])->name('show_contacts');

Route::middleware('auth')->group(function(){
    Route::resource('contacts', ContactController::class)->names([
        'index' => 'show_contacts',
        'create' => 'crear_nuevo',
        'store' => 'agregar_BD',
        'edit' => 'editarContacto',
        'update' => 'actualizarContacto',
        'destroy' => 'eliminar'
    ]);

 });

/* Route::resource('contacts', ContactController::class)->names([
    'index' => 'show_contacts',
    'create' => 'crear_nuevo',
    'store' => 'agregar_BD',
    'edit' => 'editarContacto',
    'update' => 'actualizarContacto',
    'destroy' => 'eliminar'
]); */

//Route::get('/crear', [ContactController::class, 'create'])->name('crear');






