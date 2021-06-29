<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Ref_tribunal',
        'Date_ouverture_dossier',
        'Tribunal',
        'Ville'
    ];

    public function dossier(){
        return $this->belongsTo('App\dossier');
    }

}
