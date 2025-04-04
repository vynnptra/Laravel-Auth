<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class=" bg-blend-soft-light">

    <div class='flex items-center justify-center min-h-screen from-blue-100 via-blue-300 to-blue-500 bg-gradient-to-br'>
    
    @yield('content')

    </div>

</body>
</html>