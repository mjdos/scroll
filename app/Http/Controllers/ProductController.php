<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('painel.produtos.index');
    }

    public function nft()
    {
        return view('painel.produtos.index');
    }

    public function show(Request $request)
    {
        
        return view('painel.produtos.sales',compact('request'));
    }
}
