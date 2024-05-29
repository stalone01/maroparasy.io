
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                        <div class="h-auto max-w-full rounded-2xl">
                            <livewire:flash-msg/>
                            <div class="flex items-center justify-center text-xl m-3">
                                <h1>Messages</h1>
                            </div>
                            <div class="border border-red-300">
                                @include('showPost')
                            </div>
                        </div>
                        <div class="h-auto max-w-full rounded-lg">
                            <div class="flex items-center justify-center text-xl m-3">
                                <h1>Utilisateurs</h1>
                            </div>
                            <div class="border border-red-300 ">
                                <table class="border w-full">
                                    <thead class="border-l">
                                        <tr class="border">
                                            <th class="border-r px-6 py-3">Nom</th>
                                            <th class="border-r px-6 py-3">Email</th>
                                            <th class="px-6 py-3 border-r">Rôle</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-l">
                                        @foreach ($users as $user)
                                        <tr class="border-b">
                                            <td class="border-r px-6 py-3">{{ $user->name }}</td>
                                            <td class="border-r px-6 py-3">{{$user->email}}</td>
                                            @if ($user->role==1)
                                                <td class="px-6 py-3 border-r">admin</td>
                                            @else
                                            <td class="px-6 py-3 border-r">user</td>
                                            @endif

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
                        </div>
                        <div>
                            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

