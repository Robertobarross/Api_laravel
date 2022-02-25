<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Acrescentei
use App\Models\Produto; // Acrescentei

class ProdutoController extends Controller
{
    public function index() // Traz os produtos do bd
    {
        return Produto::all();
    }

    public function store(Request $request) // Faz o cadastro no bd
    {
        $request->validate([
            'produto' => 'required',
            'fornecedor' => 'required',
            'preco' => 'required',
            'peso' => 'required',
        ]);

        return Produto::create($request->all());
    }

    public function show($id)
    {
        return Produto::findOrfail($id); // retorna um registro específico através do $id
    }

    public function update(Request $request, $id) // Edita um registro em específico
    {
        $produto = Produto::findOrfail($id);
        $produto->update($request->all());
        return $produto;
    }

    public function destroy($id) // exclui um registro

    {
        return Produto::destroy($id);
    }

    public function search($produto) // Faz a consulta pelo nome do produto
    {
        return Produto::where('produto', 'like', '%'.$produto.'%')->get();
    }
}
