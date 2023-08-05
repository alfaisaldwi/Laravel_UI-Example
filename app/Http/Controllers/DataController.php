<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Offer;
use App\Models\SalesReport;

class DataController extends Controller
{
    public function showCustomers()
    {
        $customers = Customer::all();
        return view('customers', compact('customers'));
    }

    public function showProducts()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function showOffers()
    {
        $offers = Offer::with('product')->get();
        return view('offers', compact('offers'));
    }

    public function showSalesReports()
    {
        $salesReports = SalesReport::with(['customer', 'product'])->get();
        return view('sales_reports', compact('salesReports'));
    }
}


