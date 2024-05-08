<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function nft()
    {
        $users = User::all();
        return view('site.index',compact('users'));
    }

    public function show(Request $request)
    {
        
        return view('site.sales',compact('request'));
    }
}
