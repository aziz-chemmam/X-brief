<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function delete($id){
       $user = user::where('id', $id)->delete();
        return back();

    }
    public function edit($id){
        $user = user::find($id);
        return view('/admin.editAdmin', compact('user'));
    }
    public function update(Request $request, $id){
        $user = user::find($id);
        $user->name = request('name');
        $user->fname = $request->input('fneme');
        $user->lname = $request->input('lneme');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();
        return redirect('/admin');


    }
}
