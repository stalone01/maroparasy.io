<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertion d'image</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

    <form class="max-w-sm mx-auto" action="" method="POST" >

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
            Upload file
        </label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
            SVG, PNG, JPG or GIF (MAX. 800x400px).
        </p>

    </form>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
