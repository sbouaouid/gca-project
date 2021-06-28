<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adversaire extends Model
{
    use HasFactory;

    public function dossier(){
        return $this->belongsTo('App\Dossier');
    }

}
