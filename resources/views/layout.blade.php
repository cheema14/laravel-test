<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <title>{{ trans('global.site_title') }}</title>
    @vite(['resources/sass/app.scss'])
    @yield('head')
</head>

<body>
    <div id="app" class="main">
        <div>
            @yield('content')
        </div>
    </div>
    @vite(['resources/js/app.js'])
</body>

</html>
