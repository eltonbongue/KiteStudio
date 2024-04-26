<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Galeria;
use App\Models\User;

class SessaoController extends Controller
{


        
    public function admin()
    {

        
    $galeria = Galeria::all();
    $sessao = Session::all();
    $user = User::all();

     
            foreach ($user as $users) {
                if ($users->user_id == "Admin1234") {
                    return view('dashboard_admin', ['galeria' => $galeria, 'sessao' => $sessao, 'user' => $user]); 
                }
            }
        
    }
    


}