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

    <form class="items-center max-w-sm mx-auto" action="{{ route('insertionImage') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col mb-5">
            <div class="m-4">
                <h1 class="flex items-center justify-center text-2xl m-3">Insertion d'image </h1>
                <div></div>
            </div>
            <div class="flex flex-col items-center mb-5  h-5">

                <label class="block mb-2 text-sm font-medium text-gray-900" for="file">
                    Upload image
                </label>
                <input class="block w-3/5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="file_input_help" id="file" name="file" type="file">
                <p class="mt-1 text-sm text-gray-500" id="file_input_help">
                    SVG, PNG, JPG or GIF (MAX. 800x400px).
                </p>

            </div>

            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none  focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 m-4 text-center">
                Enregistrer
            </button>
        </div>
    </form>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>
