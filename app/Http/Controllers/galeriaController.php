<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Galeria;
use App\Models\User;
use App\Models\Session;


class galeriaController extends Controller
{
    public function index(){

        $galeria = Galeria::all();
        $sessao = Session::all();
        $user = User::all();
        
        
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();
            // Return a view with the user's name
            $galeria = $user->galeria;
            return view('dashboard', ['galeria' => $galeria, 'sessao' => $sessao, 'user' => $user]); 
        } else {
            // Redirect to login if no user is authenticated
            return redirect()->route('login');
        }
       
              


}




    public function create() {

        return view('admin.galeria');
}

    public function store(Request $request){
        $galeria = new Galeria;
        //image upload
        if($request-> hasFile('image')  &&  $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));
            $requestImage-> move(public_path('img/galeria'), $imageName);
            $galeria->image = $imageName;

        }
        

        $user = auth()->user();
        $galeria->user_id = $user->id;
        $galeria-> save();

    }

}
