<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Add New Product</h1>
    <form action="{{ url('products/store') }}" method="POST">
    @csrf
    <!-- <input type="hidden" > -->
        <input type="text" name="name" id="" placeholder="Enter Product name"><br/>
        <input type="number" name="price" id="" placeholder="Enter Product price"><br/>
        <input type="submit" value="INSERT">
    </form>
</body>

</html>