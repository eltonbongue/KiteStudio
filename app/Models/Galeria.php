<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'galeria';
    protected $fillable= ['image','video','user_id', 'admin_id'];



    public function user(){

        return $this->belongsTo('App\Models\User'); 

    }


    public function admin(){

        return $this->belongsTo('App\Models\Admin'); 

    }
}
