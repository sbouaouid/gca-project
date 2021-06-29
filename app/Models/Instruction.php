<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Date',
        'Type',
        'Ref_tribunal',
    ];

    public function sujet(){
        $this->belongsTo('App\Sujet');
    }
}
