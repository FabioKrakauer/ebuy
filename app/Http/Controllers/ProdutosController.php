<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Produto;

class ProdutosController extends Controller
{
    public function viewPage(){
    	$products = Produto::all();
    	return view('produtos')->with('produtos', $products);
    }
}
