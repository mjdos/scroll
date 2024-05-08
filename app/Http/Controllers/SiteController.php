<?php

namespace App\Http\Controllers;

use App\Models\Nft;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{

    public function index(){
        return view('index');
    }
    
    public function entregas_user(){
        return view('entregas');
    }
    public function login(){
        return view('login');
    }

    public function store(Request $request){

        Session::flush();
        
        $credentials = [
            'email' => $request->usuario,
            'password' => $request->senha
        ];
            
        if(Auth::attempt($credentials))
        {

            $user = Auth::user();

            $usuario_logado = [
                'id'            => $user->id,
                'nome'          => $user->name,
                'email'         => $user->email,
            ];
            
            Session::put(['usuario' => $usuario_logado]);
            
            return redirect()->route('home_site.index');
        }

        return redirect()->back()->withInput()->withErrors(["Usuário ou Senha Incorretos."]);

    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function home(){
        return view('home');
    }

    public function ranking(){
        
        return view('ranking');
    }
    public function categorizar(){
        
        return view('categorizar');
    }

    public function usuario(){
        return view('usuario');
    }

    public function updateCadastro(Request $request)
    {
        $usuario = Session::get('usuario');
        $user = User::find($usuario['id']);
        if($usuario){
            $dados = [

                'name'          => $request->usuario,
                'senha'         => bcrypt($request->senha),
            ];

            $user->update($dados);
        }
        return view('site.usuario.index');
    }

    public function nftCriar(Request $request)
    {

       $user = $request->user(); 

        $nfts = Nft::all();

        return view('site.criar', compact('nfts'));
    }

    public function nftStore(Request $request)
    {

        // dd($request->all());
        if ($request->file('imagem')->isValid()) {
            $path = $request->file('imagem')->store('public/imagemProjetos');
            $path = explode('public/', $path);
            $imagem_1 =  'storage/'.$path[1];
        } 

        $usuario = Session::get('usuario');
        Nft::create([
            // 'autor_id' =>$usuario['id'],
            'autor_id' =>1,
            'nome' =>$request->nome,
            'rarity_id' => $request->rarity_id,
            'qtd_mx_mint'=>$request->qtd_mx_mint,
            'imagem'=>$imagem_1,
        ]);

        return redirect()->route('home_site.index');

    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function cadastroStore(Request $request)
    {

        User::create([
            'name'          => $request->usuario,
            'email'         => $request->email,
            'password'      => bcrypt($request->senha),

        ]);

        return view('login_site');
    }

}
