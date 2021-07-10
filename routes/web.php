<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogController;

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

Route::get('category-delete/{id}',[CategoryController::class,'destoryCategory'])->name('category.delete');
Route::get('category-edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
Route::post('category-update',[CategoryController::class,'update'])->name('category.update');





/*
Tag Routes
*/

Route::get('tag',[TagController::class,'index']);

Route::post('tag-store',[TagController::class,'tagCreate'])->name('tag.store');

Route::get('tag-show',[TagController::class,'tagShow'])->name('tag.show');

Route::get('tag-delete/{id}',[TagController::class,'tagDestory'])->name('tag.delete');

Route::get('tag-edit/{id}',[TagController::class,'tagEdit'])->name('tag.edit');

Route::post('tag-update',[TagController::class,'tagUpdate'])->name('tag.update');



/*
Post Routes
*/

Route::get('post',[PostController::class,'index']);

Route::post('post-store',[PostController::class,'postStore'])->name('post.store');
Route::get('post-show',[PostController::class,'postShow'])->name('post.show');
Route::get('post-delete/{id}',[PostController::class,'postDestory'])->name('post.delete');












//*frontends routes*/
Route::get('blog',[BlogController::class,'index']);