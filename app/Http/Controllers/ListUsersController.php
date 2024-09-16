<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ListUsersController extends Controller
{
    public function show(){

        $search = request('search');
        if ($search) {
           
                $users = User::where([
                    ['name','like','%'.$search.'%']
                     ])->get();

        } else {
            $users = User::all();
        }
      
        $users = User::all();
        $U="active";
        $LE="#";
        $DA="#";
        $E="#";   
        $G="#";     
        $LG="#";
       
        return view('admin.users', ['users' => $users,'search' => $search, 'LE' => $LE, 'DA' => $DA,'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

              
}









}
