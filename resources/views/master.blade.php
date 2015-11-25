<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" >
        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/roboto.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/material.min.css') }}" >
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ripples.min.css') }}" >
    </head>
    <body>

    	@include('shared.navbar')

    	@yield('content')

        <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('js/ripples.min.js') }}"></script>
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $.material.init();
            });
        </script>
    </body>
</html>