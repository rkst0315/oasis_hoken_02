<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="format-detection" content="telephone=no">

        <title>管理画面</title>

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> --}}
    </head>
    <body class="antialiased">

        <header>
            <div class="logo">
                <img src="/img/logo.png" alt="保険見直し本舗">
            </div>
        </header>
        
        <main>
            @yield('content')
        </main>

        <script src="/js/jquery-3.5.1.min.js"></script>
        
        @stack('script')
    </body>
</html>
