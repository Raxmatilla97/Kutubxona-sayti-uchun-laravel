<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Subcategory;
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

Route::get('ajax-subcat', function () {
    $cat_id = Request::get('cat_id');

    $subcategories = Subcategory::where('category_id', '=', $cat_id)->get();

    return Response::json($subcategories);
});


Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', function () {
                return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    // Kutubxona kataloglarini shakillantiruvchi routlar tizimi
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::post('category_sub', [App\Http\Controllers\CategoryController::class, 'sub_store'])->name('category.sub_store');

    // Kutubxona elektron resurslarini boshqarish va yangilash sahifalari routlari
    Route::resource('books', App\Http\Controllers\BooksController::class);

    //Kutubxonalarni kirgizish routelari
    Route::resource('/libraries', App\Http\Controllers\KutubxonalarController::class);




});


require __DIR__.'/auth.php';
