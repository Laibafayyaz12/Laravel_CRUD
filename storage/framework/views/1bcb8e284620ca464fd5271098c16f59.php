<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h1>Edit Product</h1>
<a href="<?php echo e(route('products.index')); ?>">Back</a>

<form method="POST" action="<?php echo e(route('products.update', $product->id)); ?>">
    <?php echo csrf_field(); ?>
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo e($product->name); ?>" required><br><br>
    <label>Price:</label>
    <input type="number" name="price" value="<?php echo e($product->price); ?>" required><br><br>
    <button type="submit">Update</button>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\product-crud\resources\views/edit.blade.php ENDPATH**/ ?>