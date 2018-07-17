<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Profolio</title>
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/customCss.css">
    </head>
    <body>
        @include('templates.nav')
        
        @yield('content')

        @include('about')
        @include('contact')
        @include('templates.footer')


        <div class="_arrowUp">
            <a href="#home"></a>
        </div>    
    </body>
    <script src="/js/app.js"></script>
    <script src="/js/customJs.js"></script>
</html>