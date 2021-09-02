<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\pedido;

class CarrinhoController extends Controller
{
    function _construct(){
     
      // obriga esta logado
     $this->middleware('auth');
    }

    public function index(){

        $pedidos = pedido::where([
         'status' => 'RE',
         'user_id' => Auth::id()->get()
         ]);
         
         return view('carrinho.index', compact('pedidos'));
        
    }





















}
