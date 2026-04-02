<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>
<a href="{{ route('products.index') }}">Back</a>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required><br><br>
    <label>Price:</label>
    <input type="number" name="price" value="{{ $product->price }}" required><br><br>
    <button type="submit">Update</button>
</form>
</body>
</html>