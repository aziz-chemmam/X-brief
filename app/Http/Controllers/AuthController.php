<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function create(request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->phone = request('phone');
        $user->role = request('role');
        $user->email = request('email');
        $user->password = request('password');
        $user->save();
        return redirect('/login');
    }

    public function show(user $user)
    {
        $user = user::all();
        return view('admin/dashboard', compact('user'));
    }

    public function login(request $request)
    {
        $login = $request->only('email', 'password');
        if (Auth::attempt($login)) {
            $user = Auth()->user();
            if ($user->role === 'admin') {
                return redirect('/admin');
            } else if ($user->role === 'client') {
                return view('/client.dashboard');
            } else if ($user->role === 'organisateure') {
                return redirect('/organisateur');
            }
        }
        return redirect()->back()->with('success', 'email or password is incorrect!');
    }
    public function logout()
    {
        auth::logout();
        return redirect('/login');
    }
}
