<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function show(){

        $galeria = Galeria::all();
        $sessao = Session::all();
        $user = User::all();

        $U="#";
        $DA="#";
        $LE="#";
        $E="#";   
        $G="#";     
        $LG="active";

        $user = auth()->user();
        $galeria = $user->galeria;
    

        
        return view('admin.dashboard', ['galeria' => $galeria, 'sessao' => $sessao, 'user' => $user ,  'LG' => $LG, 'LE' => $LE, 'DA' => $DA, 'U' => $U, 'E' => $E, 'G' => $G]); 
}
}