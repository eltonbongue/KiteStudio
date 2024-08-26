<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novidade;

class ListNovidadesController extends Controller
{


    public function show(){
      
        $novidades = Novidade::all();
        $U="#";
        $DA="#";
        $LE="active";
        $E="#";   
        $G="#";     
        $LG="#";
       
        return view('admin.lista_novidades', ['novidades' => $novidades, 'LE' => $LE, 'DA' => $DA,'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

              
}


public function destroy($id){

    $novidades = Novidade::findOrFail($id)->delete();
     return redirect('/lista_novidades')->with('msg','excluido com sucesso!');
}


}
