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

use App\Http\Controllers\novidadeController;
use App\Http\Controllers\galeriaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SessaoController;
use App\Http\Controllers\ListNovidadesController;
use App\Http\Controllers\ListUsersController;
use App\Http\Controllers\ListGaleriaController;


Route::get('/', [novidadeController::class, 'index']);
Route::get('/admin/novidades', [novidadeController::class, 'create']);
Route::get('/admin/galeria', [galeriaController::class, 'create']);
Route::post('/novidades',[novidadeController::class,'store']);
Route::get('/dashboard{id}',[galeriaController::class,'show']);
Route::post('/dashboard',[galeriaController::class,'store']);


Route::get('admin/dashboard_admin.blade.php', function () {
    return view('admin/dashboard_admin');
});

Route::get('auth/register.blade.php', function () {

    return view('auth/register');
});

Route::get('admin/users.blade.php', [ListUsersController::class,'show'], function () {

    $U="active";
    $E="#";
    $G="#";
    $LE="#";
    $LG="#"; 

return view('admin/users', ['U'=> $U, 'E'=>$E, 'G'=> $G, "LE"=>$LE, "LG"=>$LG]);
});

Route::get('admin/novidades.blade.php', function () {
         
    $E="active";   
       $U="#";
         $G="#";
         $LE="#";
        $LG="#";
    

         
return view('admin/novidades', ['E'=>$E ,'U'=>$U, 'G'=>$G, "LE"=>$LE, "LG"=>$LG]);
});


Route::get('admin/lista_novidades.blade.php', [ListNovidadesController::class,'show'], function () {
         
     $U="#";
     $LE="active";
     $E="#";   
     $G="#";     
     $LG="#";
    

return view('admin/lista_novidades', ["U"=>$U,'LE'=>$LE, 'E'=>$E , "G"=>$G, 'LG'=>$LG] );
});


Route::get('admin/galeria.blade.php', function () {
   
    $G="active"; 
    $U="#";
    $E="#";
    $LE="#";
    $LG="#";
    
     return view('admin/galeria', ["G"=>$G , "U"=>$U, "E"=>$E , "LE"=>$LE, "LG"=>$LG]);
})->middleware('auth');

Route::get('admin/lista_galeria.blade.php', [ListGaleriaController::class,'show'] , function () {
   
    $LG="active";
    $G="#"; 
    $U="#";
    $E="#";
    $LE="#";
    
     return view('admin/lista_galeria', ['LG'=>$LG, "G"=>$G , "U"=>$U, "E"=>$E , "LE"=>$LE ]);
});



Route::get('/sobre.blade.php', function () {
    return view('sobre');
});


Route::get('/trabalhos.blade.php', function () {
    return view('trabalhos');
});

Route::get('/contactos.blade.php', function () {
    return view('contactos');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('/admin/galeria', [galeriaController::class, 'create']);
Route::post('/dashboard',[galeriaController::class,'store']);

    Route::get('/dashboard',[galeriaController::class, 'index'], function () {
        return view('dashboard');
    })->name('dashboard');



});
