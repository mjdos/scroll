<?php

use App\Http\Controllers\{
    SiteController,
    ProductController
};
use Illuminate\Support\Facades\Route;


require __DIR__.'/painel.php';


///Site
Route::get('/', [SiteController::class, 'index'])->name('home');

//Tela dos NFT's
Route::get('/nft', [ProductController::class, 'nft'])->name('ntf.index');
Route::get('/nft/show/{id?}', [ProductController::class, 'show'])->name('ntf.show');

//Tela de Login do Internauta
Route::get('/login_internauta', [SiteController::class, 'login'])->name('login_site');
Route::post('/logar', [SiteController::class, 'store'])->name('logar');




Route::middleware('auth')->group(function () {

    Route::get('/home_site', [SiteController::class, 'home'])->name('home_site.index');
    Route::get('/logout_site', [SiteController::class, 'logout_site'])->name('logout_site');

    Route::get('/ranking', [SiteController::class, 'ranking'])->name('ranking');
    Route::get('/entregas_user', [SiteController::class, 'entregas_user'])->name('entregas_user');
    Route::get('/categorizar', [SiteController::class, 'categorizar'])->name('categorizar');
});