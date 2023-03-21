<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;

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


Route::resource('product', ProductController::class)->middleware('auth');

Route::get('/login', function () {
    if (Auth::check()) return redirect('/product');
    return view('login');
})->name('login');

Route::get('/logout', function () {
    session()->flush();
    return redirect('/login');
});


Route::post('auth', [SiteController::class, 'auth']);

Route::get('initial', [SiteController::class, 'addUser']);
