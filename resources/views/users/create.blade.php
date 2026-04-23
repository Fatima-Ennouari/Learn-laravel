<h2>Ajouter un utilisateur</h2>
<form action="{{route('users.store')}}" method="POST">
    @csrf
    <div>
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
    </div>
    <button type="submit">Ajouter</button>
</form>