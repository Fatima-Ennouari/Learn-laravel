<h2>Liste des utilisateurs</h2>
<a href="{{route('users.create')}}">Ajouter</a>
@if(session('success'))
<p style="color: green;">{{ session('success') }}</p>
@endif
<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Age</th>
        <th>Actions</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['nom']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['age']}}</td>
        <td>
            <a href="{{ route('users.edit', $user['id']) }}">Edit</a>
            <form action="{{ route('user.destroy' , $user['id'])}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
