<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;




Route::view('/', 'home');
Route::view('/contact', 'contact');

// Route::controller(JobController::class)->group(function () {

//     // Index
//     Route::get('/jobs', 'index');

//     // Creat
//     Route::get('/jobs/create', 'create');

//     // Show
//     Route::get('/jobs/{job}', 'show');

//     // Store
//     Route::post('/jobs', 'store');

//     // Edit
//     Route::get('/jobs/{job}/edit', 'edit');

//     // Update
//     Route::patch('/jobs/{job}', 'update');

//     // Destroy
//     Route::delete('/jobs/{job}', 'destroy');
// });

Route::resource('jobs', JobController::class);

// Auth

//Register
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

//Login
Route::get('/login', [SessionController::class, "create"]);
Route::post('/login', [SessionController::class, "store"]);
Route::post('/logout', [SessionController::class, "destroy"]);