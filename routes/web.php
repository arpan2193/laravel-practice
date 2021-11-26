<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::middleware(['protected'])->group(function(){
    Route::get('/products', function (){
        return view('products');
    })->name('products');
    
    Route::get('/report',[UserController::class,'show'])->name('report');
});