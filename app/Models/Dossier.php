<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    public function client(){
        return $this->belongsTo('App\Models\Client');
    }

    public function adversaire(){
        return $this->hasMany('App\Models\Adversaire');
    }

    public function documents(){
        return $this->hasMany('App\Models\Document');
    }

    public function procedure(){
        return $this->has('App\Models\Procedure');
    }

    public function frais(){
        return $this->hasMany('App\Models\Frais');
    }

    public function sujets(){
        return $this->hasMany('App\Models\Sujet');
    }

}
