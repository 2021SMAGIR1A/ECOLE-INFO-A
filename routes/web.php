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
Route::get('register', function () {
    if (\Auth::user()) {
        return redirect()->route('home');
    }
    return view('pages.auth.register');
})->name('register');
Route::get('password-recover', function () {
    if (\Auth::user()) {
        return redirect()->route('home');
    }
    return view('pages.auth.pwdrecover');
})->name('pwdrecover');

Route::group(['middleware' => 'admin.user'], function () {
    Route::get('/', function () {
        return view('pages.index');
        return view('welcome');
    })->name('home');
    require 'web-main.php';
});


Voyager::routes();

Route::fallback(function(){
    return back();
    return view('pages.error404');
});
// Route::group(['prefix' => 'admin'], function () {
// });
