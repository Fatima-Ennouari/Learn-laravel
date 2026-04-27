<h2>Create another product</h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf 
    @method('POST')
        <div border="1px solid black">
        <label for="name">
            Name: <input type="text" name="nom" id="name" required>
        </label> <br>
        <label for="prix">
            Price: <input type="number" name="prix" id="prix" required>
        </label><br>
        <button type="submit">Create Product</button>
    </div>




</form>