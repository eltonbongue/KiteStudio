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

        //image upload
        if($request-> hasFile('image')  &&  $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));
            $requestImage-> move(public_path('img/eventos'), $imageName);
            $eventos->image = $imageName;

        }
        

        $user = auth()->user();
        $eventos->user_id = $user->id;

        $eventos->save();


       // return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

}
