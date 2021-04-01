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
    return view('index');
});

Route::match(['get','post'],'/post', function (Request $request) {
    if ($request->isMethod('post')) {
        return view('post', ['success' => $request]);
    }else{
        return 'yes'.$request->ip();
    }
});

Route::get('/status', function () {
    return view('status');
});

Route::get('/about', function () {
    return view('about');
});