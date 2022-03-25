<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ImageUController;
use App\Http\Controllers\OtroController;
use App\Http\Controllers\PcController;

Route::get('/user/index',[OtroController::class, 'index'])
    ->middleware('auth')
    ->name('user.index');

Route::get('/user/create',[OtroController::class, 'create'])
    ->middleware('auth')
    ->name('user.create');

Route::post('/user/create',[OtroController::class, 'store'])
    ->middleware('auth')
    ->name('user.create');

//  Route::get('/', function () {
//      return view('home');
//  })->middleware('auth');

Route::get('/admin/HomeU',[ImageUController::class, 'indexU'])
    ->middleware('auth')
    ->name('admin.HomeU');

Route::get('/admin/createU', [ImageUController::class, 'createU'])
    ->middleware('auth')
    ->name('admin.createU');

Route::post('/admin/createU', [ImageUController::class, 'storeU'])
    ->middleware('auth');


Route::get('/',[ImageController::class, 'index']);
// ->middleware('auth');

Route::get('/admin/create', [ImageController::class, 'create'])
    ->middleware('auth')
    ->name('admin.create');

Route::post('/admin/create', [ImageController::class, 'store'])
    ->middleware('auth');

Route::resource('products', AdminController::class);
// Route::post('/products/destroy/{id}',[AdminController::class,'destroy'])
//     ->name('products.destroy');
// Route::post('/products', [AdminController::class, 'destroy'])
//     ->name('products.destroy');

Route::post('/products/create', [AdminController::Class, 'store'])
    ->middleware('auth.admin')
    ->name('products.store');

Route::get('/products/create', [AdminController::Class, 'create'])
    ->middleware('auth.admin')
    ->name('products.create');

Route::get('/products', [AdminController::Class, 'index'])
    ->middleware('auth.admin')
    ->name('products.index');
    // ---------------------------------------------------------------
     Route::post('/productspcd', [PcController::class, 'destroypc'])
     ->name('products.destroypc');

     Route::post('/productspce', [PcController::class, 'editpc'])
     ->name('products.editpc');

     Route::post('/products/createpc', [PcController::Class, 'storepc'])
     ->middleware('auth.admin')
     ->name('products.storepc');

     Route::get('/products/createpcs', [PcController::Class, 'show'])
     ->middleware('auth.admin')
     ->name('products.createpc');

     Route::get('/productspc', [PcController::Class, 'indexpc'])
     ->middleware('auth.admin')
     ->name('products.indexpc');

    // ---------------------------------------------------------------

Route::get('/registro', [RegisterController::Class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/registro', [RegisterController::Class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::Class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::Class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::Class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');