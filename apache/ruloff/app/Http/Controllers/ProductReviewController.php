<?php

namespace App\Http\Controllers;

use App\Models\ProductReview;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function create()
    {
        $products = Product::all();
        return view('reviews.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_name' => 'required|string|max:255',
            'review_text' => 'required|string',
        ]);

        ProductReview::create($validated);

        return redirect('/reviews');
    }
}
