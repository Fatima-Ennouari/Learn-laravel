<h2>Liste des produits</h2>
<button onclick="location.href='{{ route('products.create') }}'">Ajouter</button>
@if((session('success')))
<p style="color: green;">{{session('success')}}</p>
@endif
<table border="solid  black 1px">
    <tr>
        <th style="color: darkgreen;">ID</th>
        <th style="color: darkgreen;">NOM</th>
        <th style="color: darkgreen;">PRIX</th>
        <th style="color: darkgreen;">Actions</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product['id']}}</td>
        <td>{{$product['nom']}}</td>
        <td>{{$product['prix']}}</td>
        <td>
            <button onclick = "location.href='{{route('products.edit', $product['id')}}'">Edit</button><br>
            <form action="{{route('products.destroy', $product['id')}}" method="POST" >
                @csrf 
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure ?')">Delete</button>
            </form>
            
        </td>
    </tr>
    @endforeach
</table>