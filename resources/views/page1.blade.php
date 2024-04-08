@extends('layouts.app')
@section('content')
    <div>
    @include('partiels.section1')
    </div>
    <div class="flex items-center justify-center space-x-8 h-80 px-4 bg-violet-400">
        <div class=" w-5/12 img-left">
            <img src="/images/Rova-Ambohidrabiby.jpeg" alt="tombeaux-ambotrabiby" class="h-64 min-h-20 w-auto">
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
    <div class="section3">
        <div>
            <div class="flex items-center justify-center m-5 titre">
                <h1 class="text-3xl text-violet-950 font-bold">Our Best Tours</h1>
            </div>
            <div class="flex items-center justify-center space-x-9 mx-4 carte">
                <div class="w-72 rounded-md shadow-md shadow-violet-600 carte1">
                    <img class="h-48 w-full" src="/images/rovakelyTsahadit.jpg" class="card-img-top" alt="...">
                    <div class="flex flex-col space-y-4 card-body p-3">
                        <h5 class="font-semibold text-lg">Colline d'antsahadinta</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <h3 class="font-bold ">prix par personne: 10.00 € </h3>
                    </div>
                </div>
                <div class=" w-72 rounded-md shadow-md shadow-violet-600 carte">
                    <img class="h-48 w-full" src="/images/ambohimanga-rova.jpg" class="card-img-top" alt="...">
                    <div class="flex flex-col space-y-4 card-body p-3">
                        <h5 class="font-semibold text-lg">Colline d'ambohimanga</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing.
                        </p>
                        <h3 class="font-bold ">prix par personne: 10.00 € </h3>
                    </div>
                </div>
                <div class="w-72 rounded-md shadow-md shadow-violet-600 carte">
                    <img class="h-48 w-full " src="/images/tombeaux-Ambohidratrimo.jpg" class="card-img-top" alt="...">
                    <div class="flex flex-col space-y-4 card-body p-3">
                        <h5 class="font-semibold text-lg">Colline d'Ambohidratrimo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>
                        <h3 class="font-bold ">prix par personne: 10.00 € </h3>
                    </div>
                </div>
            </div>
        </div>
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

                        <!-- on affiche le pseudo des clients et la date de leurs messages -->
                        <div class="info-profile">
                            <h3 class="flex justify-center font-semibold text-md ">usernom</h3>
                            <p class="flex justify-center text-xs italic">12h00,03/04/2024</p>
                        </div>

                        <!-- on affiche ici le msg des clients -->
                        <p class="flex justify-center bg-slate-100 rounded-lg p-2 mt-2"> 
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis, necessitatibus.
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, vero.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="bg-violet-950 h-60 section-formulaire">
        <form class="flex flex-col items-center justify-center" action="" method="post">
            <h2 class="text-xl font-bold text-white m-6">Post Comments</h2><br>
            <input class="bg-transparent border-b border-white w-1/2 m-2" type="text" name="username" id="username" placeholder="enter your username...">
            <input class="bg-transparent border-b border-white w-1/2 m-2" type="text" name="msg" id="msg" placeholder="enter your comments...">
            <button type="submit" class="border border-white m-4 w-44 h-8 rounded-lg font-bold text-white">SEND</button>
        </form>
    </div>
    <div class="flex items-center justify-items-center w-full px-8 bg-black mt-8 mb-8 p-6 text-white section-contact">
        <div class="flex flex-col justify-center w-2/5 ml-6 contact">
            <h1 class="text-xl font-bold p-4">Our Contacts</h1>
            <div class="">
                <h3 class="text-md p-2">lot akt II 90 Vontovorona</h3>
                <h3 class="text-md p-2"><a href="mailo:botomitrifana@gmail.com">botomitrifana@gmail.com</a></h3>
                <h3 class="text-md p-2"><a href="tel:+261342424314">+261342424314</a></h3>
            </div>
        </div>
        <div class="border-l border-white w-2/5 formulaire-contact">
            <form class="flex flex-col items-center justify-center" action="" method="post">
                <h2 class="text-xl font-bold text-white m-6">Contact Us</h2><br>
                <input class="bg-transparent border-b border-white w-4/6 m-2" type="email" name="email" id="email" placeholder="enter your username...">
                <input class="bg-transparent border-b border-white w-4/6 m-2" type="text" name="message" id="message" placeholder="enter your text...">
                <button type="submit" class="border border-white m-4 w-44 h-8 rounded-lg font-bold text-white">SEND</button>
            </form>
        </div>
    </div>
@endsection