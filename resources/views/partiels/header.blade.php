<div class="bg-violet-950 h-1/5 text-white relative">
    @if (session('status'))
        <div class="text-red-800">
            <p>{{ session('status') }}</p>
        </div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="text-red-800">
                {{ $error }}
            </div>
        @endforeach
    @endif

    <div class="flex items-center h-12 static navbar">
        <div class="ms-16 text-3xl font-extrabold">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-700 to-lime-400 hover:animate-pulse">Stalone'S service</span>
        </div>
        <ul class="flex items-center space-x-10 ms-auto me-12 p-8 text-2xl ">
            <li class="hover:animate-bounce"><a href="#accueil">Accueil</a></li>
            <li class="hover:animate-bounce"><a href="#Services">Services</a></li>
            <li class="hover:animate-bounce"><a href="#Apropos">A propos</a></li>
            <li class="hover:animate-bounce"><a href="#contact">Contacts</a></li>
            {{-- <li class="hover:animate-bounce"><a href="{{ route('listPost') }}">Messages</a></li> --}}
            <li class="hover:animate-bounce"><a href="{{ route('dashiboard-msg') }}">Dashboard</a></li>
        </ul>
    </div>
    <div class="flex items-center space-x-10 m-auto static me-10 ms-10 IntroHead" id="accueil">
        <div class="w-1/2 h-auto mx-5">
            <h1 class="text-4xl font-bold">Come visit the 12 sacred hills of Imerina with us</h1><br><br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae eligendi pariatur neque libero doloremque veniam veritatis voluptatum et sed ipsa.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores soluta voluptate cum enim mollitia culpa?</p>
        </div>
        <div class="h-64 w-1/2 mt-4">
            {{-- <img src="/images/collines/Atongona.jpg" alt="Rova Antongona" class="h-fit m-5 p-14 rounded-xl" > --}}
            @include('partiels.imageAc')
        </div>
    </div>
</div>
