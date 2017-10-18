<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @yield('html_head')
        <link rel="stylesheet" href="ministrap.css">
        <link rel="stylesheet" href="demo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="has-footer">
        <input id="nav-collapse" type="checkbox">
        <nav class="nav" role="navigation" aria-label="main navigation">
            <div class="mw-1140">
                <a class="nav-logo" href="#">Logo</a>
                <label for="nav-collapse" class="nav-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
            <div class="nav-container mw-1140">
                <ul>
                    {!! $nav !!}
                </ul>
            </div>
        </nav>        
        <div role="main" class="content">
            @yield('content')
        </div>
        <footer class="footer">
            <div class="mw-1140">
                <div class="centered">
                    <p>
                        <a href="https://github.com/nickdekruijk/ministrap.css"><strong>ministrap.css</strong></a> by <a href="https://nickdekruijk.nl">Nick de Kruijk</a>
                    </p>
                </div>
            </div>
        </footer>        
    </body>
</html>