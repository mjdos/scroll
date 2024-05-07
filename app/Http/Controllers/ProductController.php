<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('painel.produtos.index');
    }

    public function nft()
    {
        $users = User::all();
        return view('painel.produtos.index',compact('users'));
    }

    public function show(Request $request)
    {
        
        return view('painel.produtos.sales',compact('request'));
    }
}
