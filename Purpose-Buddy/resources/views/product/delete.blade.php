<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Do You Really Want To Delete It ??</h1>
    <form action="{{route('product.remove', ['product' => $product] )}}" method="post"> 
        @csrf
        @method('post')
        <button type="submit">Delete</button> 
    </form>
</body>
</html>