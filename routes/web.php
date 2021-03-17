<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome', ['text'=>'振作國際']);
});

Route::resource('products', 'ProductController');

Route::get('test_middleware/{token}', function($token){
    return 'test middleware';
})->middleware('test_1:my-secret-token');

Route::get('test_get_something', function(Request $request) {

    return response()->json(['welcome' => '振作國際']);    
});

Route::get('setCookie', function() {
    $cookie = cookie('welcome', '振作國際', 0.05);
    return response('存好了 <a href="/getCookie">去看</a>')->cookie($cookie);
});

Route::get('getCookie', function(Request $request) {
    return $request->cookie('welcome');
});

Route::get('test', 'testController@index');

// Route::get('products/{id}', 'ProductController@show')->where('id', '[0-9]+');