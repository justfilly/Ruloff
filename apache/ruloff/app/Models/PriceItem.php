<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceItem extends Model
{
    use HasFactory;

    protected $table = 'price_items';

    protected $fillable = [
        'title', 'description', 'price', 'category'
    ];  

    public $timestamps = true;
}