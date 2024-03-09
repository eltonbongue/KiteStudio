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

        return view('admin.evento');
}


    public function store(Request $request){
        $eventos = new Evento;
        //$evento -> data = $request -> data;
        $eventos -> titulo = $request->titulo;
        $eventos -> cidade = $request->cidade;
        $eventos->descricao = $request->descricao;
        $eventos->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

}
