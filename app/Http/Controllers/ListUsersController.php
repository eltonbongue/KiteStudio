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
        $DA="#";
        $E="#";   
        $G="#";     
        $LG="#";
       
        return view('admin.users', ['users' => $users, 'LE' => $LE, 'DA' => $DA,'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

              
}









}
