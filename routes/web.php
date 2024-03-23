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
Route::post('/evento',[EventController::class,'store']);

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
    $G="#"; 

return view('admin/users', ['U'=> $U, 'E'=>$E, 'G'=> $G]);
});

Route::get('admin/evento.blade.php', function () {
         
    $E="active";   
       $U="#";
         $G="#";

         
return view('admin/evento', ['E'=>$E ,'U'=>$U, 'G'=>$G]);
})->middleware('auth');;


Route::get('admin/galeria.blade.php', function () {
   
    $G="active"; 
    $U="#";
    $E="#";
   
    
     return view('admin/galeria', ["G"=>$G , "U"=>$U, "E"=>$E]);
});



Route::get('/sobre.blade.php', function () {
    return view('sobre');
});

Route::get('/meus_eventos.blade.php', function () {
    return view('meus_eventos');
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
