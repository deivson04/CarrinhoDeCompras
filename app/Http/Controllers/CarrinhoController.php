<?php

namespace App\Http\Controllers;
use illuminate\support\facades\Auth;
use Illuminate\Http\Request;
use App\Pedido;

class CarrinhoController extends Controller
{    
     // obriga esta logado
    function _construct(){
     
      $this->middleware('auth');
    }
   
    // Função criada para indentificar o status de pedido do usuario
    public function index(){

        $pedidos = Pedido::where([
         'status' => 'RE',
         'user_id' => Auth::id()
         ])->get();
         
         /*dd([
            $pedidos,
            $pedidos[0]->pedido_produtos,
            $pedidos[0]->pedido_produtos[0]->produto
           
           
          ]);*/    
         
         return view('carrinho.index', compact('pedidos'));
        
    
    
   



  }
}