
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
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->message}}</td>
                <td>
                    <button><a href="#">Modifier</a></button>
                    <button><a href="#">Supprimer</a></button>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
   
</div>