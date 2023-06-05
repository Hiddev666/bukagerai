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
Route::get('/admin/products', [AdminController::class, 'productsIndex']);
Route::get('/admin/products/create', [AdminController::class, 'productsCreate'])->name('admin.products.create');
Route::post('/admin/products/store', [AdminController::class, 'productsStore'])->name('admin.products.store');
Route::get('/admin/products/updateform/{id}', [AdminController::class, 'productsUpdateForm'])->name('admin.products.updateform');
Route::post( '/admin/products/update', [AdminController::class, 'productsUpdate'])->name('admin.products.update');
Route::post('/admin/products/delete/{id}', [AdminController::class, 'productsDelete'])->name('admin.products.delete');

// Admin Store

