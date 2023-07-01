<?php

use Illuminate\Support\Facades\Route;

use function League\Flysystem\get;

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ClienteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', function () {
    return "Hi I'm a client";
});

Route::get('/persona', [PersonaController::class,'index'])->name('empleado');

Route::get('/cliente/{id}', [ClienteController::class,'index'])->name('cliente');

