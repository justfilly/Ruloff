<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/', function () { return view('home'); });

Route::post('/orders', [OrderController::class, 'store'])->name('order.store');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
