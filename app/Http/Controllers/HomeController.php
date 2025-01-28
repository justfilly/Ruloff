<?php

namespace App\Http\Controllers;

use App\Models\PriceItem;
use Illuminate\Http\Request;

class HomeController extends Controller  // Correctly extend Controller
{
    public function index()
    {
        // Fetch all prices for steering wheels and additional services
        $steeringWheelPrices = PriceItem::where('category', 'steering wheels')->get();
        $additionalServicesPrices = PriceItem::where('category', 'additional services')->get();

        // Return the 'home' view with dynamic data
        return view('home', compact('steeringWheelPrices', 'additionalServicesPrices'));
    }
}