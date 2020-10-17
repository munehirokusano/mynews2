<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/sns.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
        
        <!-- styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/front.css') }}" rel="stylesheet">      
    </head>
    <header>
        <div class="container">
            <div class="row justify-contentspace-between pt-2 align-items-center">
                <div class="col-md-4 logo-image mb-2">
                    <img src="{{ asset('images/askarogo.jpg') }}" alt="ロゴ">
                </div>
                <div class="col-md-4 main-title mb-2">
                    <h1>ASKASPORTSCLUB</h1>
                </div>
                <div class="col-md-4 mb-2">
                    <div id="sns-area"></div>
                </div>
            </div>
        </div>
    </header>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark bg-primary sticky-top py-2">
                <div class="container">
                    <!-- <a class="navber-brand" href="#">menu</a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=#navbar-content aria-controls="navbar-content" aria-expanded="false" aria-label="toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-content">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">入会案内<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">イベント・行事<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">カテゴリ<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">スタッフ紹介<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspop="true" aria-expanded="false">
                                    事業所一覧
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">宇都宮</a>
                                    <a class="dropdown-item" href="#">小山</a>
                                    <a class="dropdown-item" href="#">真岡</a>
                                    <a class="dropdown-item" href="#">下野</a>
                                    <a class="dropdown-item" href="#">筑西</a>
                                    <a class="dropdown-item" href="#">野木</a>
                                    <a class="dropdown-item" href="#">古河</a>
                                </div>
                            </li>
                            <li class="nav item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspop="true" aria-expanded="false">
                                    ご案内
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">ストリートダンス新規教室のご案内</a>
                                    <a class="dropdown-item" href="#">逆上がり、跳び箱、縄跳び教室のご案内</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('input') }}">お問い合わせ<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">アクセス<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                    <ul class="head-navber mt-2">
                        <li>
                            <form method="get" action="http://www.google.co.jp/search" target="_blank">
                                <input type="text" name="q" size="22" maxlength="255" value="">
                                <input type="submit" name="btng" value="検索">
                                <input type="hidden" name="hl" value="ja">
                                <input type="hidden" name="sitesearch" value="ここにアドレス">
                            </form>
                        </li>
                    </ul>



                        <! -- Right Side of Navbar -->

                        <!-- <ul class="navbar-nav ml-auto"> 
                        Authentication Links
                        </ul>
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest -->
                        <!-- </ul> -->
                </div>
            </nav>
            {{--ここまでナビゲーションバー --}}
            <main>
            @yield('content')
            </main>
        </div>
    </body>
    <footer>
        <div class="text-center">
            <a href="https://www.jpnsport.go.jp/">
                <img src="{{ asset('images/hp_banner_yoko.jpg') }}" class="img-fluid" alt="フッターロゴ">
            </a>
            <p class="mt-3"><span class="border-top"><small>ASKSスポーツクラブ TEL:〇〇〇 MAIL:〇〇〇</small></span></p>
        </div>
    </footer>    
</html>