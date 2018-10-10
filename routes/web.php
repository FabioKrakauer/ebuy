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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', function(){
	return view('faq');
});
Route::get('/admin', function(){
	redirect('/faq');
})->middleware('auth')->middleware('admin');

Route::get('/no-acess', function(){
	return view('no-acess');
});

//ADMIN PAGES

Route::get('/produtos', 'ProdutosController@viewPage');
Route::get('/produtos/adicionar', 'ProdutosController@addReturnView');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
