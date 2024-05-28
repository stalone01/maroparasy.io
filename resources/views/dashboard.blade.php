<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, neque.</p>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="grid grid-cols-2 md:grid-cols-2 gap-3">
                        <div class="h-auto max-w-full rounded-lg">
                            <h1>Messages</h1>
                            {{-- @include('showPost') --}}
                        </div>
                        <div class="h-auto max-w-full rounded-lg">
                            <h1>Utilisateurs</h1>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, suscipit dolorem. Suscipit aspernatur numquam voluptatum at veniam velit alias enim rerum animi ea ducimus dolores esse excepturi, mollitia soluta, debitis nobis est autem. Saepe, id veritatis! Nam non perferendis in, ipsum similique asperiores inventore maxime dolorum vitae libero doloribus sit?
                            </p>
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
