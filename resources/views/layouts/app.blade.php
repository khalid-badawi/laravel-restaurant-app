<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet" />
    @vite([  "resources/css/app.css",
        "resources/js/app.js",])

    @livewireStyles

</head>

<body style="padding-top:74px;">
    <header>
        <x-navbar />
    </header>
    <div class=" ">
        @yield('content')
    </div>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
    @livewireScripts

</body>

</html>
