<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novidade extends Model
{
    use HasFactory;


    protected $table = 'novidade';
    protected $fillable= ['image','descricao'];


    public function admin(){

        return $this->belongsTo('App\Models\Admin'); 

    }


}
