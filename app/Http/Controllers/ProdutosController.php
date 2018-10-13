<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Produto;
use \App\Estoque;
use DB;

class ProdutosController extends Controller
{
    public function viewPage(){
    	$products = Produto::all();
    	return view('produtos')->with('produtos', $products);
    }
    public function addReturnView(){
        return view('addproduct');
    }
    public function addProduct(Request $r){
        $validate = $r->validate([
            'name' => 'required|string|min:5|unique:produto,nome',
            'price' =>'required|integer|min:1',
            'desc' => 'required|string|min:5',
            'estoque' => 'required|integer|min:1',
            'file' => 'required|max:10000|image|mimes:jpg,jpeg,png',
        ]);
       $img = $r->file('file');
       $newName = time()."." . $img->getClientOriginalExtension();
       $img->move(public_path("images"), $newName);

       $insert = Produto::create([
           'nome' =>$r->input('name'),
           'preco' => $r->input('price'),
           'descricao' => $r->input('desc'),
           'img_source' => $newName,
       ]);
       $insert->save();
       $getId = Produto::where('nome', $r->input('name'))->value('id');
       $insertEstoque = Estoque::create([
           'produto_id' => $getId,
           'quantidade' => $r->input('estoque'),
       ]);
       $insertEstoque->save();
       return 'Produto adicionado!';
    }
    public function viewAdminProductsPage(){
        $products = Produto::all();
    	return view('adminproduct')->with('produtos', $products);
    }
    public function viewModifyProduct($id){
        $produto = Produto::find($id);
        return view('modifyproduct')->with('produto', $produto);
    }
    public function modifyProduct(Request $r, $pid){
        $product = Produto::find($pid);
        $estoque = DB::table('estoque')->where('produto_id', $pid)->update(['quantidade' => $r->input('estoque')]);
        $product->nome = $r->input('name');
        $product->preco = $r->input('price');
        $product->descricao = $r->input('desc');
        $product->save();
        return redirect('/admin/produtos');
    }
    public function deleteProduct($id){
        $product = Produto::find($id);
        $product->delete();
        return '<b>Produto Deletado!</b>';
        
    }
}

