<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/trabalhos.blade.php', function () {
    return view('trabalhos');
});

Route::get('/login.blade.php', function () {
    return view('login');
});

Route::get('/sobre.blade.php', function () {
    return view('sobre');
});

Route::get('/contactos.blade.php', function () {
    return view('contactos');
});



