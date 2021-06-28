<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function dossiers(){
        return $this->hasMany('App\Models\Dossier');
    }
}
