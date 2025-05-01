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
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

use App\Models\ProductReview;

Route::get('/employees', function () {
    $reviews = ProductReview::all();
    return view('study.employees', compact('reviews'));
})->name('employees.index');

use App\Models\Product;

Route::get('/reviews', function () {
    $products = Product::all();
    return view('study.reviews', compact('products'));
})->name('reviews.index');

use App\Http\Controllers\ProductReviewController;
Route::get('/reviews/create', [ProductReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews/store', [ProductReviewController::class, 'store'])->name('reviews.store');

Route::get('/about', function () {
    return view('study.about');
})->name('about.index');

Route::get('/article1', function () {
    return view('study.article1');
})->name('article1.index');

Route::get('/article2', function () {
    return view('study.article2');
})->name('article2.index');