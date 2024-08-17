<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.auth');


Route::get('/', [ViewController::class, 'login'])->name('login');
Route::get('/login', [ViewController::class, 'login'])->name('login');
Route::get('/logout', [ViewController::class, 'logout'])->name('logout');




Route::get('/users/show', [ViewController::class, 'show'])->name("user.show");

Route::post('/users/create', [AuthController::class, 'addUser'])->name("user.create");

Route::post('/users/store', [UserController::class, 'store'])->name("user.store");

Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name("user.edit");

Route::post('/users/{id}/update', [UserController::class, 'update'])->name("user.update");

Route::get('/users/{id}/destroy', [UserController::class, 'destroy'])->name("user.destroy");

