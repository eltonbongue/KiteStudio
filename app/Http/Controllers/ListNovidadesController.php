<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Novidade;

class ListNovidadesController extends Controller
{


    public function show(){

        $search = request('search');
        if ($search) {
           
                $novidades = Novidade::where([
                    ['descricao','like','%'.$search.'%']
                     ])->get();

        } else {
            $novidades = Novidade::all();
        }
        
        $U="#";
        $DA="#";
        $LE="active";
        $E="#";   
        $G="#";     
        $LG="#";
       
        return view('admin.lista_novidades', ['novidades' => $novidades, 'search'=> $search ,'LE' => $LE, 'DA' => $DA,'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);

              
}

public function edit($id) {

    $U="#";
    $DA="#";
    $LE="active";
    $E="#";   
    $G="#";     
    $LG="#";

    if(! $novidades = Novidade::find($id)){
        return redirect()->back();
    }
    
    
    return view('admin.edit',['novidades' => $novidades, 'LE' => $LE, 'DA' => $DA,'U' => $U, 'E' => $E, 'G' => $G, 'LG' => $LG]);
  }

 public function update( Request $request){
   

    $data = $request->all();
    //image upload
    if($request-> hasFile('image')  &&  $request->file('image')->isValid()) {

        $requestImage = $request->image;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now"));
        $requestImage-> move(public_path('img/eventos'), $imageName);
        $data['image'] = $imageName;

    }

    // Only update the image if a new one is provided   
 else {
    // Remove the image key from $data to prevent overriding the existing image
    unset($data['image']);
}


   Novidade::findOrFail($request->id)->update($data);

    return redirect('lista_novidades.edit')
    ->with('message','Actualizado com sucesso');

 }

 

public function destroy($id){

    $novidades = Novidade::findOrFail($id)->delete();
    return redirect('/lista_novidades')
    ->with('message','Actualizado com sucesso');
    
    
}




}
