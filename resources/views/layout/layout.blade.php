<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@yield('title')</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>
    <body>
       @include('header')
       @yield('carousel')
       @yield('best-deal')
        @yield('user-form')
        @yield('game-collection')
        @yield('map')
        {{-- Gameform --}}
        @yield('game-form')
       {{-- Shop Form --}}
        @yield('books-form')

        @include('footer')
        <script language="JavaScript" type="text/javascript">
            $(document).ready(function(){
              $('.carousel').carousel({
                interval: 3000
              })
            });    
          </script>
       <script type="text/javascript" src="js/jquery.js"></script>
       <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
