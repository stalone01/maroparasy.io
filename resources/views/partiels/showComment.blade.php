
    <div>
        <div class="flex items-center justify-center p-20">
                <h1 class="font-bold text-violet-950 text-2xl ">What Clients Say About our Experiences.</h1>
        </div>
        <div class="flex flex-col items-center justify-center ">
            <div class="flex items-center justify-center -mb-9 z-10">
                <div class="bg-white w-16 h-16 border-2 border-violet-950 rounded-full">
                    <img class="" src="/images/profile-simple.svg" alt="profil">
                </div>
            </div>
            <div class="grid-cols-1 w-3/5 h-42 border-8 border-gray-400 mb-28 p-4 pt-8 z-0">
                <div>
                @foreach ($comments as $comment )
                        <!-- on affiche le pseudo des clients et la date de leurs messages -->
                    <div class="info-profile">
                        <h3 class="flex justify-center font-semibold text-md ">{{$comment->username}}</h3>
                        <p class="flex justify-center text-xs italic">{{$comment->created_at}}</p>
                    </div>

                        <!-- on affiche ici le msg des clients -->
                    <p class="flex justify-center bg-slate-100 rounded-lg p-2 mt-2"> 
                            {{$comment->msg}}
                    </p>
                @endforeach
                </div>
                {{ $comments->links() }}
            </div>

        </div>
    </div>
