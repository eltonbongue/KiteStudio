<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
use App\Models\Session;
use App\Models\User;

class ListGaleriaController extends Controller
{
    public function show(){

        $galeria = Galeria::all();
        $sessao = Session::all();
        $user = User::all();

        $U="#";
        $LE="#";
        $E="#";   
        $G="#";     
        $LG="active";

        $user = auth()->user();
        $galeria = $user->galeria;
    

        
        return view('admin.lista_galeria', ['galeria' => $galeria, 'sessao' => $sessao, 'user' => $user ,  'LG' => $LG, 'LE' => $LE, 'U' => $U, 'E' => $E, 'G' => $G]); 

}
}
