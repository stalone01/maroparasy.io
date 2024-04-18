@extends('layouts.app')
@section('content')
    <div>
    @include('partiels.section1')
    </div>
    <div class="flex items-center justify-center space-x-8 h-80 px-4 bg-violet-400">
        <div class=" w-5/12 img-left">
            <img src="/images/collines/Rova-Ambohidrabiby.jpeg" alt="tombeaux-ambotrabiby" class="h-64 min-h-20 w-auto">
        </div>
        <div class="flex flex-col ctnt-rigth w-5/12 space-y-4">
            <h1 class="text-3xl text-violet-950 font-bold">Lorem ipsum dolor sit amet.</h1>
            <p class="mt-2 mb-2 truncate">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Omnis ducimus accusantium consequatur nostrum assumenda libero maiores, <br>
                repellat quas delectus unde?
                Lorem ipsum, <br> dolor sit amet consectetur adipisicing elit. Voluptatem.
            </p>
            <button type="button" class="bg-violet-950 w-60 h-12 text-white font-bold rounded-lg mt-4">
                <a href="http://">Lorem ipsum </a>
            </button>
        </div>
    </div>
    <div class="section3" id="Services">
        <div>
            <div class="flex items-center justify-center m-5 titre">
                <h1 class="text-3xl text-violet-950 font-bold">Our Best Tours</h1>
            </div>
        @include('partiels.section2')
        </div>
        @include('partiels.showComment')
    </div>
    @include('partiels.comment')
    <div class="flex items-center justify-items-center w-full px-8 bg-black mt-8 mb-8 p-6 text-white section-contact">
        <div class="flex flex-col justify-center w-2/5 ml-6 " id="contact">
            <h1 class="text-xl font-bold p-4">Our Contacts</h1>
            <div class="">
                <h3 class="text-md p-2">lot akt II 90 Vontovorona</h3>
                <h3 class="text-md p-2"><a href="mailo:botomitrifana@gmail.com">botomitrifana@gmail.com</a></h3>
                <h3 class="text-md p-2"><a href="tel:+261342424314">+261342424314</a></h3>
            </div>
        </div>
        <div class="border-l border-white w-2/5 formulaire-contact">
            <form class="flex flex-col items-center justify-center" action="{{ route('posts') }}" method="post">
                @csrf
                <h2 class="text-xl font-bold text-white m-6">Contact Us</h2><br>
                <input class="bg-transparent border-b border-white w-4/6 m-2" type="email" name="email" id="email" placeholder="enter your username...">
                <input class="bg-transparent border-b border-white w-4/6 m-2" type="text" name="message" id="message" placeholder="enter your text...">
                <button type="submit" class="border border-white m-4 w-44 h-8 rounded-lg font-bold text-white">SEND</button>
            </form>
        </div>
    </div>
@endsection
