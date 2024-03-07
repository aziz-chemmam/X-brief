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
}
