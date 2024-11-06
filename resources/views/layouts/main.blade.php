<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('style/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style/header_footer.css') }}">
    <link rel="stylesheet" href="{{ asset('style/arr.css') }}">
    <link rel="stylesheet" href="{{ asset('style/report.css') }}">
</head>
<body>
    <header class="header">
        <x-header/>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="container_footer">
        <x-footer/>
    </footer>
</body>
</html>