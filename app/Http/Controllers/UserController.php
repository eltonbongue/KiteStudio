<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Novidade;
use App\Models\Galeria;

class UserController extends Controller
{

    public function index()
    {

        $search= request('search');

        if($search){

            $users = User::where([

                ['name','like','%'.$search.'%']
            ])->get();
        }
        else{
                $users = User::all();
        }

        // Recupera todos os usuários do banco de dados
        $users = User::all();
        $G="active";
        $LE="#";
        $DA="#";
        $E="#";   
        $U="#";     
        $LG="#";
       
        return view('admin.galeria', ['users' => $users, 'LE' => $LE, 'DA'=>$DA,"U" => $U, 'E' => $E, 'G' => $G, 'LG' => $LG,'search' => $search]);
        // Retorna a view com a lista de usuários
      
    }

    public function destroy($id)
{
    $users = User::findOrFail($id)->delete();

    return redirect('/users')->with('success', 'Usuário excluído com sucesso.');
}


    public function show(){

         // Contar o número de usuários
         $userCount = User::count();
         $novidadeCount = Novidade::count();
         $galeriaCount = Galeria::count();
         $DA="active";
         $G="#";
        $LE="#";
        $E="#";   
        $U="#";     
        $LG="#";

         // Passar o número de usuários para a view
         return view('admin.dashboard_admin', ['userCount'=>$userCount,'novidadeCount'=>$novidadeCount,'galeriaCount'=>$galeriaCount,'DA'=>$DA,'LE' => $LE, "U" => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

    }

    
}
