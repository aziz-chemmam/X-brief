<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index(){
        return view('admin.categorie');
    }

    public function store(Request $request){
        $categorie = new categories();
        $categorie->name = request('name');
        $categorie->save();
        return view('admin.categorie') ;
    }

   

}
