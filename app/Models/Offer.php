<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    // Define the relationship to the Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
