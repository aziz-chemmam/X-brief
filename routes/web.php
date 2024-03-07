<?php

use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




            // register 
Route::get('/register', function () {
    return view('register');
});
Route::post('/register',[AuthController::class,'create']);



            // login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/home',[AuthController::class,'login'])->name('home');


            // annonce 
Route::get('/annonce',[AnnoncesController::class, 'show']);
Route::post('/annonce',[AnnoncesController::class, 'store']);
Route::delete('/delete/{id}',[AnnoncesController::class,'delete']);



