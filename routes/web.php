<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.index');
    });
    Route::resource('categories',CategoryController::class);
    Route::resource('sub-categories', SubCategoryController::class)
    ->except('show')
    ->parameters(['sub-categories' => 'subCategory']);


});
