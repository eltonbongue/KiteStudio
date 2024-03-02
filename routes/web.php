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
use App\Http\Controllers\ProdutoController;

Route::get('/', [EventController::class, 'index']);
Route::get('/admin/evento', [EventController::class, 'create']);
Route::post('/admin',[EventController::class,'store']);
Route::get('/evento/{id}',  [EventController::class,'show']);

Route::get('trabalhos.blade.php', [EventController::class, 'work']);

Route::get('admin/dashboard_admin.blade.php', function () {
    return view('admin/dashboard_admin');
});

Route::get('auth/register.blade.php', function () {

    return view('auth/register');
});

Route::get('admin/users.blade.php', function () {

    $U="active";
    $E="#"; 

    return view('admin/users' , ['U' => $U],['E' => $E]);
});

Route::get('admin/evento.blade.php', function () {

         $E="active";   
         $U="#";
    return view('admin/evento', ['E' => $E],['U' => $U]);
});

Route::get('/sobre.blade.php', function () {
    return view('sobre');
});

Route::get('/contactos.blade.php', function () {
    return view('contactos');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
