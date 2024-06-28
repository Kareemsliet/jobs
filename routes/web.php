<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/products',ProductController::class)->middleware('auth');

Route::group(['prefix'=>'store'],function(){
   Route::group(['middleware'=>'auth'],function(){
    Route::get('/home',function(){
        return view('pages.home');
    })->name('store.home');
    Route::get('/',[StoreController::class,'index'])->name('store.index');
    Route::get('/create',[StoreController::class,'create'])->name('store.create');
    Route::get('/{id}/edit',[StoreController::class,'edit'])->name('store.edit');

    Route::post('/store',[StoreController::class,'store'])->name('store.add');

    Route::put('/update/{id}',[StoreController::class,'update'])->name('store.update');

    Route::get('/delete/{id}',[StoreController::class,'delete'])->name('store.delete');

    Route::delete('/destroy/{id}',[StoreController::class,'destroy'])->name('store.destroy');
   });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
