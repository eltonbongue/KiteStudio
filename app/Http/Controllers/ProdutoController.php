<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function product(){

        $produtos = Produto::all();
        return view('/trabalhos', ['produtos' => $produtos]);
    }
}
