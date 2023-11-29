<?php

use App\Http\Controllers\SalesController;
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
    return view('profile');
});
Route::get('/l', function () {
    return view('landingPage');
});
Route::get('/c', function () {
    return view('customer');
});

// Route::get('sales', [SalesContoller, 'index']);

// Route::get('/s', function () {
//     return view('sales');
// });

Route::get('sales', [SalesController::class, 'index']);