<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Dashboard', function () {
    return view('Dashboard');
});


Route::get('/create_product', function () {
    return view('create_product');
});


Route::get('/create_order', function () {
    return view('create_order');
});

Route::get('/create_category', function () {
    return view('create_category');
});




Route::post('store',function (Request $request) {

    $product =new product;
     $product->title = $request->$title;
     $product-> save();



    return redirect()->back();

});
