<nav>
    <a href="/admin/formations">Formations</a>
</nav>
<table border="1">
<tr>
    <th>Nom</th>
    <th>Durée</th>
</tr>

@if(count($formations) > 0)
    @foreach($formations as $f)
    <tr>
        <td>{{ $f['nom'] }}</td>
        <td>{{ $f['duree'] }}</td>
    </tr>
    @endforeach
@else
<tr>
    <td colspan="2">liste vide</td>
</tr>
@endif

</table>
<footer>
    <p>© DevSkills</p>
</footer>