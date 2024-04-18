<div class="flex flex-col items-center">
    <div class="flex items-center justify-center space-x-9 mx-4 carte">
        @foreach ($collines as $colline )

        <div class="w-72 rounded-md shadow-md shadow-violet-600 carte1">
            <img class="h-48 w-full" src="{{ $colline->path }}" class="card-img-top" alt="...">
            <div class="flex flex-col space-y-4 card-body p-3">
                <h5 class="font-semibold text-lg">{{$colline->titre }}</h5>
                <p class="card-text">{{ $colline->contenu }}</p>
                <h4>
                    {{ $colline->petit_titre }}
                </h4>
                <h3 class="flex items-center justify-center font-bold ">prix par personne: {{ $colline->prix }} € </h3>

                    {{-- affichage commentaire --}}
                <div class="flex items-center justify-center">
                    @include('partiels.commentCol')
                </div>
                <div class="flex items-center justify-center">
                    @include('partiels.createComCol')
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="flex items-center justify-center m-4">
        {{ $collines->links('pagination::tailwind') }}
    </div>

</div>

