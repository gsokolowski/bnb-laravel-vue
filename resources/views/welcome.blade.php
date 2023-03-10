<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LaravelBnb</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Land js/app.js only just after pae load not before defer value determinates this-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div id="app"><!--  vue.js is mounted here -->
            <index></index> <!--  Index.vue compponent rendered here -->
        </div>
    </body>
</html>
