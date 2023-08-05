<?php

namespace App\Models;
use App\Models\Customer;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    // Define the relationship to the Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Define the relationship to the Product model
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
