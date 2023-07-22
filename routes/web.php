<?php

use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

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

use App\Models\Lead;
use App\Models\Relation;

//Route to 'index' function of Sales controller

Route::get('/sales', [SalesController::class, 'index'])->name('show');

//Route to 'store' function of Sales controller

Route::get('/store', [SalesController::class, 'store']);

//Route to 'create' view

Route::get('/create', function () {
    return view('sales/create'); 
});
