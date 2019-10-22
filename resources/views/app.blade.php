<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- css bundled using Laravel-mix, a wrapper around Webpack -->
        <link rel="stylesheet" href="{{ mix('css/picnic.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <!-- include('partials.navigation') -->

        <!-- Begin page content -->
        <main id="app" role="main" class="container-fluid">
            <App />
            <!-- yield('content') -->

        </main>

        <!-- include('partials.footer') -->

        <!-- Include js bundle from webpack -->
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>