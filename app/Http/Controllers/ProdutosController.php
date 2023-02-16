<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::get();
        return view('list', compact('produtos'));
    }

    public function novo()
    {
        return view('formADD');
    }

    public function add(Request $request)
    {
        $produtos = new Produtos();
        $produtos->create($request->all());

        return Redirect::to('/produtos');
    }

    public function edit($id)
    {
        $produtos = Produtos::find($id);
        return view('formEDIT', ['produtos' => $produtos]);
    }

    public function update(Request $request, $id)
    {
        $produtos = Produtos::find($id);
        $produtos->descricao = $request->input('descricao');
        $produtos->preco = $request->input('preco');
        $produtos->data_validade = $request->input('data_validade');
        $produtos->data_compra = $request->input('data_compra');
        $produtos->quantidade = $request->input('quantidade');
        $produtos->perecivel = $request->input('perecivel');
        $produtos->save();
        return Redirect::to('/produtos');
    }

    public function delete ($id){
        $produtos = Produtos::find($id);
        $produtos->delete();
        return Redirect::to('/produtos');
    }
}
