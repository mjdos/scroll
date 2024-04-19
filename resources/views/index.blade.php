<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Arquivo Nacional</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">


    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

    
    <link rel="stylesheet" href="{{ url('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/fonts.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/nice-select2.css')}}">
    <link rel="stylesheet" href="{{ url('assets/css/login-register.css')}}">

    <meta name="theme-color" content="#fafafa">
</head>


<div align="center">
<img src="{{ url('assets/img/logo-grande.png') }}" height="190">
</div>
<br>

<div class="container">

    <div class="user-stats-section" style="justify-content: center !important;">
        <a href="{{ route('login_site') }}">
            <div class="stat-item blue-gradient-diagonal" style="width: 400px; margin-right:20px">
                <div class="stat-icon"><svg class="crumina-icon">
                        <use xlink:href="#face-id-icon"></use>
                    </svg></div>
                <div class="stat-info">
                    <div class="stat-number">Desafio Conexão Cidadã</div>
                    <div class="stat-description">Ajude a moldar o futuro da documentação do Arquivo Nacional, participe e ganhe NFT exclusivos como recompensa.

                    </div>
                </div>
            </div>
        </a>
        <a href="{{ route('ntf.index') }}">
            <div class="stat-item blue-gradient-diagonal" style="width: 400px;">
                <div class="stat-icon"><svg class="crumina-icon">
                        <use xlink:href="#dollar-icon"></use>
                    </svg></div>
                <div class="stat-info">
                    <div class="stat-number">Marketplace Arquivo Nacional</div>
                    <div class="stat-description">Explore o nosso Marketplace de NFT, repleto de itens e coleções exclusivas, Compre, Troque e Venda.

                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<br>
<div align="center">
<img src="{{ url('assets/img/org_realizacao.png') }}">
</div>


<!-- main content area -->
@include('painel.layout.footer-site')
