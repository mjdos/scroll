<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
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

<body class="loading">
    <div class="main digital-store">
        <!-- header navigation -->
        <nav class="border-bottom nav-ds sticky-header">
            <div class="navigation-wrapper container flex-space-between align-items-center">
                <div class="nav-left-hand-part">
                    <!-- header logo -->
                    <div class="logo">
                        <a class="logo-link">
                            <div class="logo-img"><img src="{{ url('assets/img/logo-pequeno.png') }}" alt="logo"></div>
                            <div class="logo-text">Arquivo Nacional</div>
                        </a>
                    </div>
                    <!-- header logo -->
                </div>
                <div class="nav-right-hand-part">
                    <!-- header user profile -->
                    <div class="header-user-profile cryptoki-notif-bttn" data-target="profile-dropdown">
                        <div class="user-meta">
                            <div class="user_name">login</div>
                        </div>
                        <div class="avatar box-42">
                            <img src="{{ url('assets/img/avatar2.png')}}" alt="avatar">
                        </div>
                        <div class="closing-icon">
                            <svg class="crumina-icon close-icon">
                                <use xlink:href="#cross-icon"></use>
                            </svg>
                        </div>
                        <div id="profile-dropdown" class="cryptoki-notif-target">
                            <div class="profile-dropdown-header profile-cover-image"></div>
                            <div class="profile-dropdown-body">
                                <ul class="profile-menu">
                                    <li>
                                        <a href="26-profile-info.html"><svg class="crumina-icon">
                                                <use xlink:href="#user-icon"></use>
                                            </svg>Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <!-- header user profile -->
                </div>
            </div>
            
        </nav>
        <!-- main content area -->
        <div class="primary-content-area section-medium content-padding">
            <div class="extra-small-section">
                <div class="page-title text-center">
                    <h2><span class="gradient-text">Acessar</span> Contas</h2>
                </div>
                <form action="{{ route('logar') }}" method="POST" class="tk-lp-form user-register-kit-sign tk-lp-tabs-form-content active" >
                    @csrf
                    <div class="tk-lp-form-item">
                            <label for="sign_in_username" class="tk-lp-label">Usuário</label>
                            <input class="tk-lp-input"  name="usuario" type="text">
                    </div>
                    <div class="tk-lp-form-item">
                        <label for="sign_in_password" class="tk-lp-label">Senha</label>
                        <input class="tk-lp-input" name="senha" type="password">
                    </div>
                    <div class="tk-lp-form-item">
                        <div class="tk-lp-remember">
                            <label class="tk-lp-checkbox">
                                <input type="checkbox" name="rememberme" value="forever">
                                <span class="tk-lp-control-indicator"></span>Lembrar?
                            </label>
                            <a href="#" class="tk-lp-link-lost tk-lp-tabs-form-item" data-id="lost-password">Esqueceu sua Senha?</a>
                        </div>
                    </div>
                    <button type="submit" class="submit-bttn tk-lp-button tk-lp-button--dark tk-lp-w-full">Acessar</button>
                    <button type="button" class="tk-lp-button tk-lp-button--grey tk-lp-w-full tk-lp-tabs-form-item" data-id="sign-up">Criar sua Conta</button>
                </form>
                <div class="social-login">
                    <div class="social-login-text">
                        Ou acesse com suas redes sociais!
                    </div>
                    <div class="social-login-buttons">
                        <button class="btn btn-normal facebook"><svg class="crumina-icon">
                                <use xlink:href="#facebook-icon"></use>
                            </svg></button><button class="btn btn-normal twitter"><svg class="crumina-icon">
                                <use xlink:href="#twitter-icon"></use>
                            </svg></button>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-margin">
            <div class="footer-wrapper container">
                <!--  footer content -->
                <!--  copyright section -->
                <div class="footer-copyright flex-space-between">
                    <span class="copyright-text">
                        Cryptoki 2021 - All Rights Reserved
                    </span>
                    <ul class="sub-footer-menu">
                        <li class="menu-item"><a class="menu-link" href="!#">Terms of Service</a></li>
                        <li class="menu-item"><a class="menu-link" href="!#">Privacy</a></li>
                    </ul>
                </div>
                <!--  copyright section -->
            </div>
        </footer>
        <!--Footer area-->
    </div>



    <!-- Add your site or application content here -->
    <script defer src="{{ url('assets/js/waves.min.js')}}"></script>
    <script defer src="{{ url('assets/js/swiper-bundle.min.js')}}"></script>
    <script defer src="{{ url('assets/js/main.js')}}"></script>
    <script defer src="{{ url('assets/js/svg-loader.js')}}"></script>
    <script defer src="{{ url('assets/js/nice-select2.js')}}"></script>



</body>

</html>