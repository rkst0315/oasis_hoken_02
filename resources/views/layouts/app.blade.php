<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="format-detection" content="telephone=no">

    <title>子育て応援キャンペーン</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- slick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">

    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>

    <script>
        (function(d) {
            var config = {
                    kitId: 'ckw1wcr',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>

    <script>
        (function(d) {
            var config = {
                    kitId: 'ckw1wcr',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>


    <title>@yield('title')</title>

    @stack('head')
</head>

<body class="antialiased">

    <header>
        <div class="openbtn1">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <nav id="g-nav">
            <div id="g-nav-list">
                <ul class="font-yu-gothic">
                    <li class="nav_logo"><a href="{{ url('/') }}"><img src="/img/logo.png" alt="子育て応援キャンペーン"></a>
                    </li>
                    <li><a href="{{ url('/') }}">トップ</a></li>
                    <li><a href="{{ url('/privacy-policy') }}">個人情報の取り扱い</a></li>
                    <li><a href="{{ url('/company') }}">サイト運営会社</a></li>
                    <li><a href="{{ url('/faq') }}">よくあるご質問</a></li>
                    <li><a href="mailto:contact@puremam-cp.jp">お問い合わせ</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    @section('footer')
        <div class="footer_bg">
            <img src="/img/fotter-bg.png" alt="">
        </div>
        <footer>
            <div class="footer_logo">
                <a href="{{ url('/') }}"><img src="/img/logo.png" srcset="/img/logo.png x1,/img/logo@2x.png x2"
                        alt=""></a>
            </div>
            <ul class="font-yu-gothic">
                <li>
                    <a href="{{ url('/privacy-policy') }}">個人情報の取り扱い</a>
                </li>
                <li>
                    <a href="{{ url('/company') }}">サイト運営会社</a>
                </li>
                <li>
                    <a href="{{ url('/faq') }}">よくあるご質問</a>
                </li>
                <li>
                    <a href="mailto:mailto:contact@puremam-cp.jp">お問い合わせ</a>
                </li>
            </ul>

            <p class="copyright">Copyright&copy; OASIS inc. All rights reserved.</p>
        </footer>
    @show

    <script src="/js/jquery-3.5.1.min.js"></script>
    <script>
        $(".openbtn1").click(function() { //ボタンがクリックされたら
            $(this).toggleClass('active'); //ボタン自身に activeクラスを付与し
            $("#g-nav").toggleClass('panelactive'); //ナビゲーションにpanelactiveクラスを付与
        });

        $("#g-nav a").click(function() { //ナビゲーションのリンクがクリックされたら
            $(".openbtn1").removeClass('active'); //ボタンの activeクラスを除去し
            $("#g-nav").removeClass('panelactive'); //ナビゲーションのpanelactiveクラスも除去
        });

        

    </script>

    @stack('script')
</body>

</html>
