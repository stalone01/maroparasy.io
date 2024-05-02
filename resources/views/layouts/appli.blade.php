<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>stalone's service</title>
</head>

<body class="bg-gray-200">

    @include('partiels.header')

    @yield('content')

    @include('partiels.footer')

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

</body>

</html>
