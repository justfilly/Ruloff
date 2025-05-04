<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderExportController;
use TCG\Voyager\Facades\Voyager;

Route::get('voyager/orders/export', [OrderExportController::class, 'export'])->name('voyager.orders.export');

Route::get('/', function () {
    $response = app(HomeController::class)->index(request());
    return response($response)->header('Cache-Control', 'public, max-age=86400');
})->name('home');

Route::post('/orders', function () {
    $response = app(OrderController::class)->store(request());
    return response($response)->header('Cache-Control', 'no-store');
})->name('order.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
