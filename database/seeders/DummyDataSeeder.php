<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Offer;
use App\Models\SalesReport;

class DummyDataSeeder extends Seeder
{
    public function run()
    {
        // Data Dummy Pelanggan
        Customer::create(['name' => 'John Doe', 'email' => 'john@example.com']);
        Customer::create(['name' => 'Jane Smith', 'email' => 'jane@example.com']);

        // Data Dummy Produk
        Product::create(['name' => 'Product A', 'price' => 100]);
        Product::create(['name' => 'Product B', 'price' => 150]);
        Product::create(['name' => 'Product C', 'price' => 200]);

        // Data Dummy Penawaran
        Offer::create(['product_id' => 1, 'discount' => 10]);
        Offer::create(['product_id' => 2, 'discount' => 5]);
        Offer::create(['product_id' => 3, 'discount' => 15]);

        // Data Dummy Laporan Penjualan
        SalesReport::create(['customer_id' => 1, 'product_id' => 1, 'quantity' => 3, 'total_amount' => 270]);
        SalesReport::create(['customer_id' => 2, 'product_id' => 2, 'quantity' => 2, 'total_amount' => 285]);
    }
}
