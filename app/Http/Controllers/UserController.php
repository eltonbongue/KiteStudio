<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $E="#";   
        $U="#";     
        $LG="#";
       
        return view('admin.galeria', ['users' => $users, 'LE' => $LE, "U" => $U, 'E' => $E, 'G' => $G, 'LG' => $LG,'search' => $search]);
        // Retorna a view com a lista de usuários
      
    }

    public function destroy($id)
{
    $users = User::findOrFail($id)->delete();

    return redirect('/users')->with('success', 'Usuário excluído com sucesso.');
}
    
}
