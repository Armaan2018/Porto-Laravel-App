<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('dashboard', [DashboardController::class, 'viewDashboard']);

/*
Category Routes
*/

Route::get('category',[CategoryController::class,'index']);


Route::post('category-store',[CategoryController::class,'store'])->name('category.store');



Route::get('category-show',[CategoryController::class,'showCategory'])->name('category.show');


Route::get('category-show',[CategoryController::class,'showCategory'])->name('category.show');



Route::get('category-delete/{id}',[CategoryController::class,'destoryCategory'])->name('category.delete');



Route::get('category-edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');

Route::post('category-update',[CategoryController::class,'update'])->name('category.update');