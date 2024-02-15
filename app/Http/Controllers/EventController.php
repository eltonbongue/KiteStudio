<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventController extends Controller
{
    public function index(){

        $eventos = Evento::all();
        return view('welcome', ['eventos' => $eventos]);

    }


    public function create() {

        return view('events.create');
}


}
