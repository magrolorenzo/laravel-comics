<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield("page-title", "Laravel DC Comics")
        </title>
    </head>
    <body>
        @include("partials.header")
        @yield("content")
        @include("partials.footer")
    </body>
</html>
