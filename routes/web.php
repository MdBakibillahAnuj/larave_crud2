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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home.home');
    })->name('dashboard');
});
Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
Route::post('/new-product', [ProductController::class, 'newProduct'])->name('new-product');
Route::post('/Update-product', [ProductController::class, 'UpdateProduct'])->name('Update-product');
Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
Route::get('/delete-product/{id}', [ProductController::class, 'deleteProduct'])->name('delete-product');
Route::get('/product-status/{id}', [ProductController::class, 'productStatus'])->name('product-status');
Route::get('/edit-product/{id}', [ProductController::class, 'productEdit'])->name('edit-product');
