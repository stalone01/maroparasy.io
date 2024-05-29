@if (session('status'))
    <div class="alert alert-success">
        <p>
            {{session('status')}}
        </p>
    </div>
@endif
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
            <form class="flex flex-col items-center justify-center" action="{{ route('updatePost') }}" method="post">
                @csrf
                <h2 class="text-xl font-bold text-white m-6">Contact Us</h2><br>
                <input type="hidden" name="id" id="id" value="{{$posts->id}}">
                <input class="bg-transparent border-b border-white w-4/6 m-2" type="email" name="email" id="email" value="{{$posts->email}}">
                <input class="bg-transparent border-b border-white w-4/6 m-2" type="text" name="message" id="message" value="{{$posts->message}}">
                <button type="submit" class="border border-white m-4 w-44 h-8 rounded-lg font-bold text-white">MODIFIER</button>
            </form>
        </div>
    </div>
