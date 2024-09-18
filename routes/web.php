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
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessaoController;
use App\Http\Controllers\ListNovidadesController;
use App\Http\Controllers\ListUsersController;
use App\Http\Controllers\ListGaleriaController;




Route::group(['middleware' => 'verifySession'], function () {
    // suas rotas protegidas aqui
});



Route::get('/', [novidadeController::class, 'index']);
Route::get('/admin/novidades', [novidadeController::class, 'create']);
Route::get('/admin/galeria', [galeriaController::class, 'create']);
Route::post('/novidades',[novidadeController::class,'store'])->name('lista_novidade.store');
Route::get('/dashboard{id}',[galeriaController::class,'show']);
Route::post('/dashboard',[galeriaController::class,'store']);
Route::delete('/lista_galeria/{id}',[ListGaleriaController::class,'destroy'])->name('lista_galeria.destroy');
Route::delete('/lista_novidades/{id}',[ListNovidadesController::class,'destroy'])->name('lista_novidades.destroy');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');



Route::get('admin/dashboard_admin.blade.php',[UserController::class, 'show'],  function () {

    $U="active";
    $E="#";
    $DA="#";
    $G="#";
    $LE="#";
    $LG="#"; 
    
    return view('admin/dashboard_admin', ['userCount'=>$userCount,'novidadeCount'=>$novidadeCount,'DA'=>$DA, 'U'=> $U, 'E'=>$E, 'G'=> $G, "LE"=>$LE, "LG"=>$LG]);
});





Route::get('auth/register.blade.php', function () {

    return view('auth/register');
});

Route::get('admin/users.blade.php', [ListUsersController::class,'show'], function () {

    $U="active";
    $E="#";
    $DA="#";
    $G="#";
    $LE="#";
    $LG="#"; 

return view('admin/users', ['U'=> $U, 'DA'=>$DA,'E'=>$E, 'G'=> $G, "LE"=>$LE, "LG"=>$LG]);
});

Route::get('admin/novidades.blade.php', function () {
         
    $E="active";   
       $U="#";
       $DA="#";
         $G="#";
         $LE="#";
        $LG="#";
    

         
return view('admin/novidades', ['E'=>$E ,'U'=>$U,'DA'=>$DA, 'G'=>$G, "LE"=>$LE, "LG"=>$LG]);
});


Route::get('admin/lista_novidades.blade.php', [ListNovidadesController::class,'show'], function () {
         
     $U="#";
     $DA="#";
     $LE="active";
     $E="#";   
     $G="#";     
     $LG="#";
    

return view('admin/lista_novidades', ["U"=>$U,'LE'=>$LE, 'DA'=>$DA,'E'=>$E , "G"=>$G, 'LG'=>$LG] );
});


Route::get('admin/galeria.blade.php', [UserController::class, 'index'], function () {
   
    $G="active"; 
    $U="#";
    $DA="#";
    $E="#";
    $LE="#";
    $LG="#";
    
    
     return view('admin/galeria', ["G"=>$G , "U"=>$U,"DA"=>$DA, "E"=>$E , "LE"=>$LE, "LG"=>$LG]);
     
});

Route::get('admin/lista_galeria.blade.php', [ListGaleriaController::class,'show'] , function () {
   
    $LG="active";
    $G="#"; 
    $DA="#"; 
    $U="#";
    $E="#";
    $LE="#";
    
     return view('admin/lista_galeria', ['LG'=>$LG, "G"=>$G , "DA"=>$DA,"U"=>$U, "E"=>$E , "LE"=>$LE ]);
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
    
    Route::get('/admin/galeria', [galeriaController::class, 'create']);
Route::post('/dashboard',[galeriaController::class,'store']);

    Route::get('/dashboard',[galeriaController::class, 'index'], function () {
        return view('dashboard');
    })->name('dashboard')->middleware('auth');



});
