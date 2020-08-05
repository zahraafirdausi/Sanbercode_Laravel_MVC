<?php

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

//Route::get('/', function () {
   // return view('welcome');
//});
/* ('/') -> home 
   ('/register') ->formregist
   ('/welcome') ->selamat datang ambil method post
*/
//tugas MVC sukses
//Route::get('/', 'HomeController@show');
Route::get('/register', 'AuthController@create');
Route::post('/welcome1', 'AuthController@read');

route::get('/master', function(){
   return view('adminlte.master');
});

//tugas template adminlte
route::get('/', function(){
   return view('items.index');
});

route::get('/data-tables', function(){
   return view('items.datatables');
});
