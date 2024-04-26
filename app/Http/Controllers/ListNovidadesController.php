<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novidade;

class ListNovidadesController extends Controller
{


    public function show(){
      
        $novidades = Novidade::all();
        $U="#";
        $LE="active";
        $E="#";   
        $G="#";     
        $LG="#";
       
        return view('admin.lista_novidades', ['novidades' => $novidades, 'LE' => $LE, 'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

              
}


}
