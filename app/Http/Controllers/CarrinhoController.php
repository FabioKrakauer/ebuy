<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Produto;
use Session;
use DB;

class CarrinhoController extends Controller
{
    public function viewCarrinho(Request $r){
        if(!Session::has('cart')){
            return 'Seu carrinho esta vazio!';
        }else{
            $carts = Session::get('cart');
            return view('cart')->with('carts', $carts);
        }
    }
    public function addCarinho(Request $r, $id){
        $product = Produto::find($id);
        $array = [

            "product_id" => $product->id,
            "name" => $product->nome,
            "price" => $product->preco,
            "qnt" => 1,
        ];
        $content = Session::has('cart') ? Session::get('cart') : [];
        array_push($content, $array);
        Session::put('cart', $content);
        return redirect('/produtos');
    }
    public function removeCarrinho(Request $r, $id){
        if(Session::has('cart')){
            $array = Session::get('cart');
            $newArray = [];
            foreach($array as $cart){
               if($cart['product_id'] == $id){
               }else{
                   array_push($newArray, $cart); 
               }   
             }
             if(empty($newArray)){
                 Session::flush('cart');
             }else{
                Session::put('cart', $newArray);
             }
            return redirect('/carrinho');
        }
    }
    public function qntAdd(Request $r, $id){
        if(Session::has('cart')){
            $array = Session::get('cart');
            $newArray = [];
            foreach($array as $cart){
               if($cart['product_id'] == $id){
                   $cart['qnt'] += 1;
                   array_push($newArray, $cart);
               }else{
                   array_push($newArray, $cart); 
               }   
             }
            Session::put('cart', $newArray);
            return redirect('/carrinho');
        }
    }
    public function qntRem(Request $r, $id){
        if(Session::has('cart')){
            $array = Session::get('cart');
            $newArray = [];
            foreach($array as $cart){
               if($cart['product_id'] == $id){
                   if($cart['qnt'] == 1){
                    return redirect('/carrinho/remover/$id');
                   }else{
                    $cart['qnt'] -= 1;
                    array_push($newArray, $cart);
                   }
               }else{
                   array_push($newArray, $cart); 
               }   
             }
            Session::put('cart', $newArray);
            return redirect('/carrinho');
        }
    }
    public function checkout(){
        if(!Session::has('cart')){
            return 'Seu carrinho esta vazio!';
        }else{

            return view('payment')->with('carts', Session::get('cart'));
        }
    }
    public function paymentConfirmed(){
        if(Session::has('cart')){
            $products = Session::get('cart');
            foreach($products as $product){
                $estoqueQnt = DB::table('estoque')->where('produto_id', $product['product_id'])->get();
                $array = $estoqueQnt->toArray();
                $quantidadeAtual = $array[0]->quantidade;
                $quantidadeComprada = $product['qnt'];
                $novaQuantidade =  $quantidadeAtual - $quantidadeComprada;
                $estoque = DB::table('estoque')->where('produto_id', $product['product_id'])->update(['quantidade' => $novaQuantidade]);            
            }
            return 'Compra realizada com sucesso!';   
        }
    }
}
