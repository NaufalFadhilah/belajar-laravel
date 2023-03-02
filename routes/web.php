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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 9*9;
});

// Route::get('/contact', function(){
//     return view('hello');
// });
$nama = "anjay";
Route::view('/contact', 'hello', ['name' => $nama, 'kelas' => '121']);

// Redirect

Route::redirect('/about', '/contact');

// Route Parameters

Route::get('/product/{id}', function ($id) {
return view('product', ['nomor' => $id]);
});