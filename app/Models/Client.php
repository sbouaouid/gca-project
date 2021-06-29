<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    public $timestamps = false;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom',
        'Adresse',
        'Ville',
        'Téléphone1',
        'téléphone2',
        'Fax',
        'Email',
        'Observation_client',
        'type'
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function dossiers(){
        return $this->hasMany('App\Models\Dossier');
    }
}
