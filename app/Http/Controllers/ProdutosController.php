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

    public function edit( $id)
    {
        $produtos = new Produtos();
        $produtos::get();
        $produtos = Produtos::findOrFail($id);
        return view('formADD', ['produtos' => '$produtos']);
    }

    public function update(Request $request, Atualizar $atualizar)
    {
        $produtos = Produtos::findOrFail($id);
        $produtos->update($request->all());
        return Redirect::to('/produtos');
    }

    public function delete ($id){
        $produtos = Produtos::findOrFail($id);
        $produtos->delete();
        return Redirect::to('/produtos');
    }
}
