<?php

namespace App\Http\Controllers;

use App\Models\PriceItem;
use App\Models\Product  ;
use Illuminate\Http\Request;

class HomeController extends Controller 
{
    public function index()
    {
        $steeringWheelPrices = PriceItem::where('category', 'steering wheels')->get();
        $additionalServicesPrices = PriceItem::where('category', 'additional services')->get();
        $products = Product::all();

        return view('home', compact('steeringWheelPrices', 'additionalServicesPrices', 'products'));
    }
}