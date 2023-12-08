<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\DashboardContrller;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\IssuesController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// My declarations begin from here!
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard', [DashboardContrller::class, 'index']);
});
Route::prefix('user')->middleware(['auth'])->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

//From old work
Route::resource('issues', IssuesController::class);
Route::delete('/issues/{id}', [IssuesController::class, 'destroy'])->name('issues.destroy');

//Search implementation
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::resource('folders', FolderController::class);

Route::get('/users', [UserController::class, 'index'])->name('users');

Route::delete('/users/{user_id}', [UserController::class, 'destroy'])->name('users.destroy');
