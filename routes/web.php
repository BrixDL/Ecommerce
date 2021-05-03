<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\CategoryController;    
use App\Models\User;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    echo "This is Home Page";
});

Route::get('/contact', [ContactController::class, 'index'])->name('Brix');

//Category Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])-> name('all.category');
Route::post('/category/add', [CategoryController::class, 'AddCat'])-> name('store.category');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    //$users= User::all();
    $users = DB::table('users')-> get();
    return view('dashboard',compact('users'));
})->name('dashboard');

