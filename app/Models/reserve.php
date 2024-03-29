<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserve extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'annonceId',
    ];

    public function annonce(){
        return $this->belongsTo(Annonces::class);
    }



}
