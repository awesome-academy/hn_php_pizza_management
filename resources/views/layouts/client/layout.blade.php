<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pizzaro</title>
        @include('layouts.client.assets.css')
    </head>
    <body class="page-template-template-homepage-v1 home-v1">
        <div id="page" class="hfeed site">
            {{-- Header --}}
            @include('layouts.client.sections.header')
            {{-- Content --}}
            @yield('content')
            {{-- Footer --}}
            @include('layouts.client.sections.footer')
        </div>
        @include('layouts.client.assets.js')
    </body>
</html>
