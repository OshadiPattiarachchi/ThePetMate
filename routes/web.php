<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\PetAdController;
use App\Http\Controllers\PetProfilesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','rolemanager:user'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin');
})->middleware(['auth', 'verified','rolemanager:admin'])->name('admin');

Route::get('/seller/dashboard', function () {
    return view('seller');
})->middleware(['auth', 'verified','rolemanager:seller'])->name('seller');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/index' , function(){
    return view('index');
})->name('index');



Route::get('/find', function () {
    return view('find');
})->name('find');



//Route::get('/find', [PetController::class, 'find'])->name('pets.find');

// Route to show the form for adding a new pet
Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');

// Route to store the newly created pet
Route::post('/pets', [PetController::class, 'store'])->name('pets.store');

//Route::get('/find', [PetController::class, 'index'])->middleware('auth');
Route::get('/pets', [PetController::class, 'index'])->name('pets.index')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/post-ad', [PetAdController::class, 'create'])->name('post-ad.create');
    Route::post('/post-ad', [PetAdController::class, 'store'])->name('post-ad.store');
});

//Route::get('/ad/{id}', [PetAdController::class, 'show'])->name('post-ad.show');
//Route::get('/ads/all', [PetAdController::class, 'allAds'])->name('ads.all');
//Route::get('/ads/all', [PetAdController::class, 'index'])->name('ads.all');

Route::get('/ads', [PetAdController::class, 'index'])->name('ads.index');

// Route to view an individual ad
Route::get('/ads/{id}', [PetAdController::class, 'show'])->name('ads.show');



Route::resource('/pets', PetController::class);


require __DIR__.'/auth.php';
