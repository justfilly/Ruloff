<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use TCG\Voyager\Facades\Voyager;

use App\Http\Controllers\OrderExportController;

Route::get('voyager/orders/export', [OrderExportController::class, 'export'])->name('voyager.orders.export');


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/orders', [OrderController::class, 'store'])->name('order.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Study
use App\Http\Controllers\ProductController;

Route::get('/news/discount', function () {
    return view('pages.news.discount');
})->name('news.discount');


Route::get('/employees', function () {
    return view('pages.employees.index');
})->name('employees.index');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
