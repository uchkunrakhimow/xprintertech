<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouterController;

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

Route::get('/', [RouterController::class, 'home'])->name('home');
Route::get('drivers/', [RouterController::class, 'drivers'])->name('drivers');
Route::get('products-list/', [RouterController::class, 'products_list'])->name('products-list');
Route::get('about/', [RouterController::class, 'about'])->name('about');
Route::get('news/', [RouterController::class, 'news'])->name('news');
Route::get('product-detail/', [RouterController::class, 'product_detail'])->name('product-detail');
Route::get('contact/', [RouterController::class, 'contact'])->name('contact');