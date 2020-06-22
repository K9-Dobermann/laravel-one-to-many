<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <title>repo</title>
    </head>
    <body>

        @include('components.header')
        @yield('content')

        @include('components.footer')

    </body>
</html>
