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

Route::get('/', 'ProdutosController@viewPage');

Route::get('/faq', function(){
	return view('faq');
});
Route::get('/admin', function(){
	redirect('/faq');
})->middleware('auth')->middleware('admin');

Route::get('/no-acess', function(){
	return view('no-acess');
});

Route::get('/perfil', 'UserController@viewEditPage')->middleware('auth');
Route::post('/perfil', 'UserController@editProfile')->middleware('auth');
//ADMIN PAGES

Route::get('/produtos', 'ProdutosController@viewPage');

Route::get('/carrinho', 'CarrinhoController@viewCarrinho')->middleware('auth');
Route::get('/carrinho/adicionar/{id}', 'CarrinhoController@addCarinho')->middleware('auth');
Route::get('/carrinho/quantidade/adicionar/{id}' , 'CarrinhoController@qntAdd')->middleware('auth');
Route::get('/carrinho/quantidade/remover/{id}' , 'CarrinhoController@qntRem')->middleware('auth');
Route::get('/carrinho/remover/{id}', 'CarrinhoController@removeCarrinho')->middleware('auth');

Route::get('/admin/produtos/adicionar', 'ProdutosController@addReturnView')->middleware('auth')->middleware('admin');
Route::post('/admin/produtos/adicionar', 'ProdutosController@addProduct');
Route::get('/admin/produtos', 'ProdutosController@viewAdminProductsPage')->middleware('auth')->middleware('admin');
Route::get('/admin/produtos/modificar/{id}', 'ProdutosController@viewModifyProduct')->middleware('auth')->middleware('admin');
Route::put('/admin/produtos/modificar/{id}', 'ProdutosController@modifyProduct');
Route::get('/admin/produtos/deletar/{id}', 'ProdutosController@deleteProduct')->middleware('auth')->middleware('admin');
Auth::routes();

Route::get('/pagamento', 'CarrinhoController@checkout')->middleware('auth');
Route::post('/pagamento', 'CarrinhoController@paymentConfirmed')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
