<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <title>Laravel Pagination</title>
</head>

<body class="bg-gray-200 md:px-20 px-4 py-4">
    <h1 class="text-center text-4xl mb-6 font-bold">Laravel Pagination</h1>
    @include('layouts.flashMessage')
    @yield('content')
</body>

</html>
