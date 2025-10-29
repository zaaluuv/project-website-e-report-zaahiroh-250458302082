<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    $nama ='Zaa';
    $jurusan = 'TRPL';
    $asal =  'Indonesia';
    return view('index',compact('nama', 'jurusan', 'asal'));
});

Route::get('/table', function () {
    return view('table');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','iniAdmin'])->group(function(){
    // Route per Controller
    Route::controller(FrontController::class)->group(function(){
        Route::get('/dashboard', 'indexFront')->name('dashboard.admin');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/category', 'indexCategory')->name('index.category');
        Route::post('/createCategory', 'createCategory')->name('create.category');
        Route::put('/updateCategory', 'updateCategory')->name('update.category');
        Route::delete('/deleteCategpry', 'deleteCategory')->name('delete.category');
    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/user', 'indexUser')->name('user.admin');
        Route::post('/user-create', 'createUser')->name('user.create');
    });
});
