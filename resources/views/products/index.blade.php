<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Products List</h1>
   @foreach ($myProduct as $product)
   <div>
   <b>Product name: {{ $product->name }}</b><br/>
   <b><i>product price:RS. {{ $product->price}}</i></b>
   <a href="{{ url('products/'.$product->id.'/edit') }}">Edit</a>
   <a href="{{ url('products', $product->id) }}">Show</a>
   <a href="{{ url('products/destroy', $product->id) }}">Delete</a>
   <hr/>
   </div>
   @endforeach
</body>
</html>