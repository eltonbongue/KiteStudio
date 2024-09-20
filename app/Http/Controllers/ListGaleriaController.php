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


        $search = request('search');

        if ($search) {
            // Busca galerias onde o nome do usuário corresponde ao termo de busca
            $galeria = Galeria::whereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->with('user')->get();
        } else {
            $galeria = Galeria::with('user')->get();
        }


        $U="#";
        $DA="#";
        $LE="#";
        $E="#";   
        $G="#";     
        $LG="active";

        //$user = auth()->user();
        //$galeria = $user->galeria;

        
        return view('admin.lista_galeria', ['galeria' => $galeria, 'search' => $search ,'sessao' => $sessao, 'user' => $user ,  'LG' => $LG, 'LE' => $LE, 'DA' => $DA,'U' => $U, 'E' => $E, 'G' => $G]); 

}



    public function destroy($id){

           $galeria = Galeria::findOrFail($id)->delete();
            return redirect('/lista_galeria')->with('msg','excluido com sucesso!');
    }
    
}
