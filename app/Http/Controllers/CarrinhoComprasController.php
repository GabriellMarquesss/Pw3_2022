<?php

namespace App\Http\Controllers;

class CarrinhoComprasController extends Controller
{
 public function index(){

}

public function limparCarrinho(){
     \Cart::clear();
     return redirect()->route('vitrine.carrinho');

}

}
