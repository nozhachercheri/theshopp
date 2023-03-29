<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Vue</title>
    <!-- Scripts -->
    <script src="{{ mix('web-assets/js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ mix('web-assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="header">
        <main class="py-3">
            <h3>clients Vue</h3>
            {{-- <router-view></router-view> --}}
        </main>
    </div>
</body>
</html>