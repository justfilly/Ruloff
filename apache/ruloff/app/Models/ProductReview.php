<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable = [
        'product_id',
        'user_name',
        'review_text',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
