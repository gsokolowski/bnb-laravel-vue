<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelBnb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        This is welcome page bnblaravelvue.local
        <div id="app">
            <router-view></router-view> <!-- it will display vew commpomemts here when it will match the route-->
        </div>
    </body>
</html>
