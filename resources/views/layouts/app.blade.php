<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>stalone's service</title>
</head>
<body>
    
    @include('partiels.header')

    @yield('content')

    @include('partiels.footer')
    
</body>
</html>