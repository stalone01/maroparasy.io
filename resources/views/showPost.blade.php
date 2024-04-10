@if (session('status'))
    <div>
        <p style="color: green;">
            {{session('status')}}
        </p>
    </div>
@endif
<div>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>email</th>
                <th>message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @php
            $ide = 1;
        @endphp
        @foreach ($posts as $post)
            <tr>
                <td>{{$ide}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->message}}</td>
                <td class="">
                    <button><a href="{{route('updateposts',$post->id)}}">Modifier</a></button>
                    <button><a href="{{route('deletePosts',$post->id)}}">Supprimer</a></button>
                </td>
            </tr>
            @php
                $ide += 1;
            @endphp
        @endforeach
        </tbody>
        </table>
   
</div>