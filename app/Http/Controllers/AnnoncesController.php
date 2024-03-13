<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use App\Models\categories;
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
        $annonce->categorieId = request('categories');
        $annonce->save();
        return redirect('/organisateur');

    }
  
  
    public function show(Annonces $annonces)
    {
        $userId = auth()->user()->id;
        $categories = categories::all();
        $annonce = annonces::where('userId', $userId)->get();
        return view('organizer.dashboard', compact('annonce', 'categories'));
    }

    public function delete($id)
    {
        Annonces::where('id', $id)->delete();
        return back();
    }

    public function edit($id)
    {
        $annonce = Annonces::find($id);
        return view('/organizer.editOrg', compact('annonce'));
    }

    public function update(Request $request, $id)
    {
        $annonce = Annonces::find($id);
        $annonce->titre = $request->input('titre');
        $annonce->description = $request->input('description');
        $annonce->date = $request->input('date');
        $annonce->place = $request->input('place');
        $annonce->lieu = $request->input('lieu');
        $annonce->categorieId = $request->input('categories');
        $annonce->update();
        return redirect('/organisateur')->with('status', 'annonce Updated Successfully');
    }

  
    
}
