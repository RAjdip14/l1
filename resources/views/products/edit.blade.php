<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{ url('products/update', $myProduct->id) }}" method="POST">
    @csrf
        <input type="text" name="name" id="" placeholder="Enter Product name" value="{{$myProduct -> name}}"><br/>
        <input type="number" name="price" id="" placeholder="Enter Product price" value="{{$myProduct -> price}}"><br/>
        <input type="submit" value="UPDATE">
    </form>
</body>
</html>