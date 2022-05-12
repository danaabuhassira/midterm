<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/',function(){
    return view('createProduct');
});

Route::get('app',function(){
    return view('layout.app');
});

//Route::get('/', [ProductController::class, 'index'])->name('allProduct');
Route::get('/product/{id}', [TaskController::class, 'show'])->name('allProduct');
Route::delete('task/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::put('edit/{id}',[ProductController::class, 'edit']);
Route::patch('update/{id}',[ProductController::class, 'update']);
Route::get('/task/{id}', [ProductController::class, 'show'])->name('products.show');
