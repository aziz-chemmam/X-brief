<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;

class Client extends Controller
{
    public function show(Annonces $annonces){
        $annonce = Annonces::all();
        return view('/client.dashboard',compact('annonce'));
    }

  
}