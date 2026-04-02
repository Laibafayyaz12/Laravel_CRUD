<!-- resources/views/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        a.add-btn {
            display: inline-block;
            background: #4CAF50; /* green */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        a.add-btn:hover {
            background: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table th, table td {
            padding: 15px;
            text-align: left;
        }
        table th {
            background: #2196F3; /* blue */
            color: white;
        }
        table tr:nth-child(even) {
            background: #e3f2fd; /* light blue */
        }
        table tr:nth-child(odd) {
            background: #bbdefb; /* slightly darker light blue */
        }
        a.edit-btn {
            background: #FF9800; /* orange */
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            text-decoration: none;
            margin-right: 5px;
        }
        a.edit-btn:hover {
            background: #fb8c00;
        }
        a.delete-btn {
            background: #f44336; /* red */
            color: white;
            padding: 5px 10px;
            border-radius: 6px;
            text-decoration: none;
        }
        a.delete-btn:hover {
            background: #d32f2f;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<h1>Products</h1>

<?php if(session('success')): ?>
    <div class="success"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<a class="add-btn" href="<?php echo e(route('products.create')); ?>">Add Product</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($product->id); ?></td>
        <td><?php echo e($product->name); ?></td>
        <td>$<?php echo e($product->price); ?></td>
        <td>
            <a class="edit-btn" href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>
            <a class="delete-btn" href="<?php echo e(route('products.destroy', $product->id)); ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\product-crud\resources\views/index.blade.php ENDPATH**/ ?>