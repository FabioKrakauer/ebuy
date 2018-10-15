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

Route::get('/admin/produtos/adicionar', 'ProdutosController@addReturnView')->middleware('auth')->middleware('admin');
Route::post('/admin/produtos/adicionar', 'ProdutosController@addProduct');
Route::get('/admin/produtos', 'ProdutosController@viewAdminProductsPage')->middleware('auth')->middleware('admin');
Route::get('/admin/produtos/modificar/{id}', 'ProdutosController@viewModifyProduct')->middleware('auth')->middleware('admin');
Route::put('/admin/produtos/modificar/{id}', 'ProdutosController@modifyProduct');
Route::get('/admin/produtos/deletar/{id}', 'ProdutosController@deleteProduct')->middleware('auth')->middleware('admin');
Auth::routes();

Route::get('/payment', function(){
	return view('payment');
});

Route::get('/cart', function(){
	return view('cart');
});

Route::get('/home', 'HomeController@index')->name('home');
