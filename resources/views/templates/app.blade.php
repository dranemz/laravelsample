<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profolio</title>
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @include('templates.nav')
        @yield('content')

        @include('templates.sidebar')
    </body>
    <script src="/js/app.js"></script>
</html>