<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'index']);

// Product Detail
Route::get('/product/{id}', [PagesController::class, 'productdetail']);

// Get All Product by Category
Route::get('/products/category/{category}', [PagesController::class, 'productsbycategory']);

// Redirect Back
Route::get('/back', function() {
    return redirect('/');
})->name('back');

// Search
Route::post('/search', [PagesController::class, 'searchResult'])->name('search');

// Admin Create
Route::get('/admin/create', [AdminController::class, 'productCreate']);

// Admin Store
Route::post('/admin/store', [AdminController::class, 'productStore'])->name('admin.store');

