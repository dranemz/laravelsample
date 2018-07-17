<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Profolio</title>
        <link rel="stylesheet" href="/css/app.css">
        <style>
            .progress{
                height:30px;
                margin-top:10px;
            }
            ._footer{
                border:2px solid #212529;
                margin-bottom:0px;
                padding-top:20px;
                min-height:100px;
                background-color:#212529;
                text-align:center;
            }
            ._footer>p{
                font-family:'helvetica';
                font-size:13px;
                color:gray;
            }
        </style>
    </head>
    <body>
        @include('templates.nav')
        
        @yield('content')

        @include('about')
        @include('contact')
        @include('templates.footer')    
    </body>
    <script src="/js/app.js"></script>
    <script>
        $(document).ready(function(){
            $('a[href^="#"]').on('click', function(event) {

            var target = $( $(this).attr('href') );

            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 500);
            }

            });
        });
    </script>
</html>