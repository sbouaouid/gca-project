<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honoraire extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Montant',
        'Type',
        'Num_facture'
    ];

    public function frais(){
        $this->belongsTo('App\Frais');
    }
}
