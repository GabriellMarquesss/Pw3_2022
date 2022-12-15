<?php

    namespace App\Http\Controllers;

    use App\Models\Categoria;
    use App\Models\Subcategoria;
    use http\Env\Request;

    class CarrinhoComprasController extends Controller
    {
     public function index(){
         $categorias = Categoria::all();
         $subcategorias = Subcategoria::all();
         $itens = \Cart::getContent();
         //dd($itens);
         return view('vitrine.carrinnho.index', compact('itens', 'categorias','subcategorias'));

    }
    public function adicionarItemCarrinho(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->quantity,
            'attributes' => ['image' => $request->image]

        ]);
        return redirect()->route('vitrine.addcarrinho');
    }

    public function removerItemCarrinho(Request $request){
         \Cart::remove($request->id);
         return redirect()->route('vitrine.carrinho');
    }

        public function alterarItemCarrinho(Request $request){
             \Cart::update($request->id,[
             'quantity'=>[
                 'relative'=>false,
                'value' => $request->quantity,
            ],
                 ]);
             return redirect()->route('vitrine.carrinho');
    }

    public function limparCarrinho(){
         \Cart::clear();
         return redirect()->route('vitrine.carrinho');

    }

    }
