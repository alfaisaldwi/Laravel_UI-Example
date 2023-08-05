<?php
use App\Http\Controllers\DataController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}
);

Route::get('/customers', [DataController::class, 'showCustomers']);
Route::get('/products', [DataController::class, 'showProducts']);
Route::get('/offers', [DataController::class, 'showOffers']);
Route::get('/sales_reports', [DataController::class, 'showSalesReports']);

