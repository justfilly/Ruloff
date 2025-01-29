<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceItem;
use App\Models\Product;
use App\Models\Review;

class HomeController extends Controller 
{
    public function index()
    {
        $steeringWheelPrices = PriceItem::where('category', 'steering wheels')->get();
        $additionalServicesPrices = PriceItem::where('category', 'additional services')->get();
        $products = Product::all();
        $reviews = Review::all();

        return view('home', compact('steeringWheelPrices', 'additionalServicesPrices', 'products', 'reviews'));
    }
}