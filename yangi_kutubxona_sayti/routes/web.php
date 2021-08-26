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

Route::get('/', function () {
    return view('frontend');
});




Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
                return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    Route::resource('category', App\Http\Controllers\CategoryController::class);

    Route::post('category_sub', [App\Http\Controllers\CategoryController::class, 'sub_store'])->name('category.sub_store');
    

});


require __DIR__.'/auth.php';
