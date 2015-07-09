<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Produto;
use Request;
use App\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',
            ['only'=> ['adiciona', 'remove', 'atualiza', 'novo']]);
    }

    public function lista(){
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produto = Produto::find($id);
        if(empty($produto)){
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request){
        Produto::create($request->all());

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function atualiza($id){

        $produto = Produto::find($id);
        return view('produto.atualiza')->with('produto', $produto);
    }

    //Uma forma mais simples de atualizar um registro
    public function altera(ProdutosRequest $request, $id){
        $produto = Produto::find($id)->update($request->all());
        return redirect()->action('ProdutoController@lista');
        
    }

}
