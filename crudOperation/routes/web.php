<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\BannerController;

Route::get('/',[HomeController::class ,"index"])->name('home');



Route::prefix('/todo')->group(function(){
    Route::get('/',[TodoController::class ,"index"])->name('todo');
    Route::post('/store',[TodoController::class ,"store"])->name('todo.store');
    Route::get('/{task_id}/delete',[TodoController::class ,"delete"])->name('todo.delete');
    Route::get('/{task_id}/done',[TodoController::class ,"done"])->name('todo.done');

});

/*Route::prefix('/banner')->group(function(){
    Route::get('/',[TodoController::class ,"index"])->name('banner');
    Route::post('/store',[TodoController::class ,"store"])->name('banner.store');
    Route::get('/{banner_id}/delete',[TodoController::class ,"delete"])->name('banner.delete');
    Route::get('/{banner_id}/done',[TodoController::class ,"done"])->name('banner.status');

    <a class="nav-link active" aria-current="page" href="{{route('todo')}}">todo</a>

});*/

Route::get('/product',[BannerController::class ,"index"])->name('product.index');
Route::get('/create',[BannerController::class ,"create"])->name('product.create');
Route::post('/store',[BannerController::class ,"store"])->name('product.store');
Route::get('/product/{product}/edit',[BannerController::class ,"edit"])->name('product.edit');
Route::put('/product/{product}/update',[BannerController::class ,"update"])->name('product.update');
Route::get('/product/{product}/destory',[BannerController::class ,"destory"])->name('product.destory');
Route::get('/product/{product}/view',[BannerController::class ,"view"])->name('product.view');
