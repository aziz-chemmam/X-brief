<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
  
   
    public function store(Request $request)
    {
        $annonce = new Annonces();
        $annonce->userId = auth()->user()->id;
        $annonce->titre = request('titre');
        $annonce->description = request('description');
        $annonce->date = request('date');
        $annonce->place = request('place');
        $annonce->lieu = request('lieu');
        $annonce->categories = request('categories');
        $annonce->save();
        return redirect('/annonce');

    }

  
    public function show(Annonces $annonces)
    {
        $userId = auth()->user()->id;
        $annonce = annonces::where('userId', $userId)->get();
        return view('organizer.dashboard', compact('annonce'));
    }

    public function delete($id)
    {
        Annonces::where('id', $id)->delete();
        return back();
    }

    
}
