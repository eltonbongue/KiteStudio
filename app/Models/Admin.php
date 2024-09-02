<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;


    protected $table = 'admin';
    protected $fillable = ['name', 'email'];









    public function galeria(){

        return $this->hasMany('App\Models\Galeria'); 

    }

    public function novidade(){

        return $this->hasMany('App\Models\Novidade'); 

    }


    public function users(){

        return $this->hasMany('App\Models\Users'); 

    }









}
