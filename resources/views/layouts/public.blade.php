<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/stile.css') }}" >
        <title>TrovaCasa.it | @yield('title', 'Homepage')</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div id="logo">
                    <h1><a href="">TrovaCasa.it </a></h1>
                    <p>Lorem ipsum</p>
                </div>
            </div>

            <!-- end #header -->
            <div id="menu">
                @include('layouts/_navpublic')
            </div>

            <!-- end #menu -->
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        @yield('content')
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- end #content -->
            <div id="footer">
                <br>
                <p>Footer con informazioni generali ed eventuali link</p>
                <p>Lorem ipsum</p>
            </div>
            <!-- end #footer -->
        </div>
    </body>
</html>