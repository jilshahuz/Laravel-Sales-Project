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

//Route::get('/sales', [SalesController::class, 'index']);
//Route::resource('sales', SalesController::class);

//Route::view('/sales','sales.index',['name'=>'ram']);

//GET
//Route::get('/sales',[SalesController::class,'show']);
// Route::get('/sales/Lead_id={id}',[SalesController::class,'create'])->whereNumber('id');
// Route::get('/sales/Relation_id={id}',[SalesController::class,'create'])->whereNumber('id');

//POST
//Route::post('/sales/create',[SalesController::class,'create']);


use App\Models\Lead;
use App\Models\Relation;

//redirecting to 'index' function of Sales controller

Route::get('/sales', [SalesController::class, 'index'])->name('show');

Route::get('/store', [SalesController::class, 'store']);

// Route::post('store',function () {
//     return ; 
// });

//Route for url in the format '/sales/Lead_id=id' 
//corresponding lead table entry is passed to 'store' function in Sales controller

// Route::get('/store/lead_id', function (Lead $lead) {
//     return App::call('App\Http\Controllers\SalesController@store', ['data' => $lead]);
// });

//Route for url in the format '/sales/Relation_id=id' 
//corresponding relation table entry is passed to 'store' function in Sales controller


// Route::get('/store?{relation_id}', function (Relation $relation) {
//    return App::call('App\Http\Controllers\SalesController@store', ['data' => $relation]);
// });

//Route::get('/createsales','SalesController@index')->name('createsales');

Route::get('/create', function () {
    return view('sales/create'); 
});