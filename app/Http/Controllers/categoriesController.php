<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index(){
        $categorie = categories::all();
        return view('admin.categorie', compact('categorie'));
       
    }

    public function add(Request $request){
        $categorie = new categories();
        $categorie->name = request('name');
        $categorie->save();
        return redirect('/categorie');
    }

    public function delete($id) {
        categories::where('id',$id)->delete();
        return back();

    }

}
