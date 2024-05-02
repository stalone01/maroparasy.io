<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messages</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @if (session('status'))
    <div>
        <p style="color: green;">
            {{session('status')}}
        </p>
    </div>
@endif

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    email
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    message
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
        @php
            $ide = 1;
        @endphp
        @foreach ($posts as $post)
            <tr class="border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">
                    {{$ide}}
                </th>
                <td class="px-6 py-4">
                    {{$post->email}}
                </td>
                <td class="px-6 py-4 bg-gray-50">
                    {{$post->message}}
                </td>
                <td class="px-6 py-4">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none"><a href="{{route('updateposts',$post->id)}}">Modifier</a></button>
                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2"><a href="{{route('deletePosts',$post->id)}}">Supprimer</a></button>

                </td>
            </tr>
            @php
                $ide += 1;
            @endphp
        @endforeach
        </tbody>
    </table>
</div>
<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>

