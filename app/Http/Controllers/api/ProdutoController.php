<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Acrescentei
use App\Models\Produto; // Acrescentei

class ProdutoController extends Controller
{
    public function index() // Rota principal
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
    }

    public function show($id)
    {
        return Produto::findOrfail($id)->get();
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
