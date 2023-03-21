<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;
use App\Http\Controllers\ProductController;

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
    $data["hai"] = "<strong>hello</strong>";

    return view('welcome', $data);
});

Route::get('/hello', function() {
   echo "hallo";
});

Route::get('lat1', [Lat1Controller::class,'index']);


Route::resource('product', ProductController::class);
