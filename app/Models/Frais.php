<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frais extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Date',
        'Montant',
        'Type',
        'Reglé'
    ];

    public function dossier(){
        $this->belongsTo('App\Dossier');
    }

}
