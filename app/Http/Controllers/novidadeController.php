<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novidade;

class novidadeController extends Controller
{
    public function index(){

        $novidades = Novidade::all();
        return view('welcome', ['novidades' => $novidades]);

    }


    public function create() {

        return view('admin.evento');
}


    public function store(Request $request){
        $novidades = new Novidade;
        $novidades->descricao = $request->descricao;

        //image upload
        if($request-> hasFile('image')  &&  $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));
            $requestImage-> move(public_path('img/eventos'), $imageName);
            $novidades->image = $imageName;

        }

        $novidades->save();


       // return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
}
