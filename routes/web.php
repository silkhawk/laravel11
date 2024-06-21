<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});
//http://127.0.0.1:8000/hello

Route::get('/sapa/{nama}', function ($nama) {
    return 'HALLO '.$nama;
});

Route::get('/Users',[UsersController::class,'index'])->name('users');
Route::get('/Users/create',[UsersController::class,'create'])->name('users.create');
Route::post('/Users', [UsersController::class, 'store'])->name('users.store');
Route::delete('/Users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
Route::get('/Users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/Users/{id}/update', [UsersController::class, 'update'])->name('users.update');


//http://127.0.0.1:8000/sapa/jhon
