<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\categoriesController;
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
Route::get('/hello', [AuthController::class, 'logout'])->name('logout');


            // annonce 
Route::get('/organisateur',[AnnoncesController::class, 'show']);
Route::post('/organisateur',[AnnoncesController::class, 'store']);
Route::delete('/delete/{id}',[AnnoncesController::class,'delete']);
Route::get('/edit/{id}', [AnnoncesController::class,'edit'])->name('edit');
Route::post('/update/{id}', [AnnoncesController::class, 'update']);


            //admin
Route::get('/admin',[AuthController::class, 'show']);
Route::delete('/delete/{id}',[AdminController::class, 'delete'])->name('delete');


        //categories
Route::get('/categories',[categoriesController::class,'index']);
route::post('/categories',[categoriesController::class,"store"])->name('addCategorie');


