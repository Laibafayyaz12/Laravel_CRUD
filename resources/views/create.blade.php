<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            padding: 40px;
        }

        h1 {
            text-align: center;
            color: #4a90e2;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0 20px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            background-color: #4a90e2;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: 0.3s;
        }

        button:hover {
            background-color: #357ab8;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #4a90e2;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        p.success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<h1>Add Product</h1>

@if(session('success'))
    <p class="success">{{ session('success') }}</p>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Product Name" required>
    <input type="number" name="price" placeholder="Enter Product Price" required>
    <button type="submit">Add Product</button>
</form>

<a href="{{ route('products.index') }}">Back to Products List</a>

</body>
</html>