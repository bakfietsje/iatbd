<?php

use Illuminate\Support\Facades\Route;



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


Route::middleware(['auth','admin'])->group(function()
{
    Route::get('/admin', [\App\Http\Controllers\ProductController::class,'admin']);
    Route::post('/admin', [\App\Http\Controllers\ProductController::class,'verwijder']);
        
});

Route::middleware(['auth'])->group(function()
{
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class,'create']);
    Route::post('/product', [\App\Http\Controllers\ProductController::class,'store']);
    Route::get('/product/uitgeleend', [\App\Http\Controllers\ProductController::class, 'succes'])->middleware(['auth']);   
    Route::get('/product', [\App\Http\Controllers\ProductController::class,'index'])->middleware(['auth']);
    Route::get('/product/{id}', [\App\Http\Controllers\ProductController::class,'show']);
    Route::post('/product/{id}', [\App\Http\Controllers\ProductController::class,'leenUit']);
    Route::get('/', [\App\Http\Controllers\ProductController::class,'index']);
    Route::get('/mijnProducten', [\App\Http\Controllers\ProductController::class,'laadMijnProducten']);
    Route::get('/product/mijnProducten/{id}', [\App\Http\Controllers\ProductController::class,'laadMijnProductenTerug']);
    Route::post('/product/mijnProducten/{id}', [\App\Http\Controllers\ProductController::class,'geefProductTerug']);
    Route::get('/review', [\App\Http\Controllers\ProductController::class,'laadReview']);
    Route::post('/review', [\App\Http\Controllers\ProductController::class,'plaatsReview']);
    Route::get('/profiel', [\App\Http\Controllers\ProductController::class,'laadProfiel']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
