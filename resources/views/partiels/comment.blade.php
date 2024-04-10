<div class="bg-violet-950 h-60 section-formulaire">
        <form class="flex flex-col items-center justify-center" action="{{ route('comments') }}" method="post">
            <h2 class="text-xl font-bold text-white m-6">Post Comments</h2><br>
            <input class="bg-transparent border-b border-white w-1/2 m-2" type="text" name="username" id="username" placeholder="enter your username...">
            <input class="bg-transparent border-b border-white w-1/2 m-2" type="text" name="msg" id="msg" placeholder="enter your comments...">
            <button type="submit" class="border border-white m-4 w-44 h-8 rounded-lg font-bold text-white">SEND</button>
        </form>
</div>