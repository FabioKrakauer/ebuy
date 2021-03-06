<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Produto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Produto::all();
      return view('produtos')->with('produtos', $products);
    }
}
