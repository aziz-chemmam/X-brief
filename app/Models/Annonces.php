<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonces extends Model
{
    use HasFactory;

    protected $fillable =[

        'titre',
        'description',
        'date',
        'place',
        'lieu',
        'categorieId',

    ];

    public function reserves(){
        return $this->hasMany((reserve::class));    
    }
}
