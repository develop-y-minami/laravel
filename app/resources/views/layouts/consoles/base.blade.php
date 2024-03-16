<!DOCTYPE html>

{{--ページ共通レイアウト--}}
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{--タイトル--}}
        <title>@yield('title')</title>

        {{--Reset CSS--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.0/destyle.min.css">

        {{--共通CSS--}}
        <link rel="stylesheet" href="{{ asset('css/commons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/commons/common.css') }}">
        <link rel="stylesheet" href="{{ asset('css/consoles/layouts/base.css') }}">

        {{--各ページのCSSを読み込み--}}
        @stack('css')

        {{--JQuery--}}
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

        {{--共通JavaScript--}}

        {{--各ページのJavaScript：固有を読み込み--}}
        @stack('js')
    </head>

    <body class="base">
        {{--共通ヘッダー--}}
        <header class="baseHeader">
            <div class="logoContainer">
                <div class="systemName">My Sytem Name</div>
            </div>
            <div class="loginUserContainer"></div>
        </header>

        <main class="baseMain">
            {{--左サイド表示エリア--}}
            <aside class="baseLeft">
                {{--公式LINEアカウント表示エリア--}}
                <div class="lineOfficialAccountContainer">
                    <header>LINE</header>
                    <main>
                        <div class="pictureContainer">
                            <img src="" alt="" class="circleImg">
                        </div>
                        <div class="infoTable">
                            <div class="row">
                                <div class="head">LINE ID</div>
                                <div class="data">aaaaaa</div>
                            </div>
                            <div class="row">
                                <div class="head">アカウント名</div>
                                <div class="data"></div>
                            </div>
                        </div>
                    </main>
                </div>

                {{--サイドメニュー--}}
                <ul class="sideMenu">
                    <li class="parent"><a href="{{ url('/') }}">Top</a></li>
                    <li class="parent"><a href="{{ url('/') }}">Menu1</a></li>
                    <li class="child"><a href="{{ url('/') }}">Menu1-1</a></li>
                    <li class="child"><a href="{{ url('/') }}">Menu1-2</a></li>
                    <li class="child"><a href="{{ url('/') }}">Menu1-3</a></li>
                    <li class="parent"><a href="{{ url('/') }}">Menu2</a></li>
                    <li class="parent"><a href="{{ url('/') }}">Menu3</a></li>
                    <li class="child"><a href="{{ url('/') }}">Menu3-1</a></li>
                </ul>
            </aside>

            {{--ページ表示コンテンツ--}}
            <main class="baseContent">
                {{--トップメニュー--}}
                <ul class="topMenu">
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu2</a></li>
                    <li><a href="">Menu3</a></li>
                </ul>

                {{--パンくずリスト--}}
                <ul class="breadcrumbTrail">
                    <li><a href="">Top</a></li>
                    <li><a href="">Menu1</a></li>
                    <li><a href="">Menu2</a></li>
                    <li><a href="">Menu3</a></li>
                </ul>

                {{--各ページ固有のページ表示コンテンツ--}}
                <div class="pageContent">
                    
                </div>
            </main>
        </main>
    </body>
</html>