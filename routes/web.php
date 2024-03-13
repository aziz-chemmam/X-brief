<?php

use App\Http\Controllers\Client;
use function Laravel\Prompts\search;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReserveController;

use App\Http\Controllers\AnnoncesController;
use App\Http\Controllers\categoriesController;

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
Route::post('/register', [AuthController::class, 'create']);



// login
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/home', [AuthController::class, 'login'])->name('home');
Route::get('/hello', [AuthController::class, 'logout'])->name('logout');


// annonce 
Route::middleware(['checkRole:organisateure'])->group(function () {
    Route::get('/organisateur', [AnnoncesController::class, 'show']);
    Route::post('/organisateur', [AnnoncesController::class, 'store']);
    Route::delete('/delete/{id}', [AnnoncesController::class, 'delete']);
    Route::get('/edit/{id}', [AnnoncesController::class, 'edit'])->name('edit');
    Route::post('/update/{id}', [AnnoncesController::class, 'update']);
});

//admin
Route::middleware(['auth' , 'checkRole:admin'])->group(function () {
    Route::get('/admin', [AuthController::class, 'show']);
    Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/update/{id}', [AdminController::class, 'update']);
                              //categories
    Route::get('/categorie', [categoriesController::class, 'index']);
    Route::post('/categorie', [categoriesController::class, 'add'])->name('addCategorie');
    Route::delete('/categories/{id}', [categoriesController::class, 'delete'])->name('deleteCategorie');
});


// client 

Route::middleware(['auth' , 'checkRole:client'])->group(function () {
    Route::get('/client', [Client::class, 'show']);
    Route::post('/reservation/create', [ReserveController::class, 'create'])->name("reservation.create");
    Route::get('/reservations', [ReserveController::class, 'allReservations']);
    Route::get('/search', [SearchController::class, 'search']);
    
});
