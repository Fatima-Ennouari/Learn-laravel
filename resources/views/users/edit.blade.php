<!-- <h2>Modifier utilisateur</h2>

<form action="{{ route('users.update', $user['id']) }}" method="POST">
    @csrf
    @method('PUT')

    Nom: <input type="text" name="nom" value="{{ $user['nom'] }}"><br>
    Email: <input type="text" name="email" value="{{ $user['email'] }}"><br>
    Age: <input type="number" name="age" value="{{ $user['age'] }}"><br>

    <button type="submit">Modifier</button>
</form> -->