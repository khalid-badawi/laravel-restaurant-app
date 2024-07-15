<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

</head>

<body style="padding-top:74px;">
    <header>
        <x-navbar />
    </header>
    <div class=" ">
        @yield('content')
    </div>

    <footer>
        <x-footer />
    </footer>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    @livewireScripts
</body>

</html>
