<?php

namespace App\Http\Controllers;

use App\Models\{
    Comment,
    User,
    Rarity,
    Nft
};
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function nft()
    {
        $raridades  = Rarity::all();
        $nfts       = Nft::orderBy('id', 'desc')->get();
        return view('site.index', compact('nfts', 'raridades'));
    }

    public function show(Request $request, $id)
    {
        $nft = Nft::find($id);
        $comments = Comment::where('nft_id',$id)->get();
        return view('site.sales', compact('nft','comments'));
    }

    public function filter(Request $request)
    {

      
        $query = Nft::query();

        // Filtrar pelo nome do NFT
        if ($request->filled('nome')) {
            $query->where('nome', 'like', '%' . $request->input('nome') . '%');
        }

        if ($request->filled('author')) {
            // Considerando que 'autor_id' é a chave estrangeira para o relacionamento com o autor
            $query->whereHas('autor', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->input('author') . '%');
            });
        }

        // Filtrar pela raridade selecionada
        if ($request->filled('rarity_id') && $request->input('rarity_id') != '') {
            $query->where('rarity_id', $request->input('rarity_id'));
        }

        // Ordenar pelo preço, se selecionado
        if ($request->filled('price')) {
            if ($request->input('price') === 'lowest') {
                $query->orderBy('value', 'asc');
            } elseif ($request->input('price') === 'highest') {
                $query->orderBy('value', 'desc');
            }
        }

        // Executar a consulta
        $nfts = $query->get();
        $raridades = Rarity::all();

        return view('site.search', compact('nfts', 'raridades'));
    }


}
