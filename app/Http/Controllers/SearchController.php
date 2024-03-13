<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(request $request)
    {
        $search = $request->input('search');
        $annonces = Annonces::query()
        ->where('titre', 'like', '%'. $search. '%')
        ->get();
        return view('client.search', compact('annonces') );
    }
}
