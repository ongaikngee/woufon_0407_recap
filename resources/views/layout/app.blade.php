<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Catering</title>
    <link rel='stylesheet' href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-700">
    <nav class="bg-white flex justify-between">
        <ul class="flex p-5">
            <li><a class="p-3" href="">one</a></li>
            <li><a class="p-3" href="">two</a></li>
            <li><a class="p-3" href="">three</a></li>
        </ul>
        <ul class="flex p-5">
            <li><a class="p-3" href="">apple</a></li>
            <li><a class="p-3" href="">banana</a></li>
            <li><a class="p-3" href="">car</a></li>
        </ul>
    </nav>
    @yield('content')
    
</body>
</html>