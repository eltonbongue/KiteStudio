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

    public function work(){

        $eventos = Evento::all();
        return view('trabalhos', ['eventos' => $eventos]);

    }


    public function create() {

        return view('events.create');
}


    public function store(Request $request){
        $eventos = new Evento;
        $evento -> date = $request -> date;
        $evento -> title = $request->title;
        $evento -> city = $request->city;
        $evento -> private = $request->private;
        $evento->description = $request->description;
        $evento->items=$request->items;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

}
