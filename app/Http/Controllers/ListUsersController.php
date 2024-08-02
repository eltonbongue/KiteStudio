<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListUsersController extends Controller
{
    public function show(){
      
        $users = User::all();
        $U="active";
        $LE="#";
        $E="#";   
        $G="#";     
        $LG="#";
       
        return view('admin.users', ['users' => $users, 'LE' => $LE, 'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

              
}









}
