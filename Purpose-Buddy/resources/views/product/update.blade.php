<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <div class="container">

        <div class="error">

            @if( $errors->any() )

                <ul>
                    @foreach( $errors->all() as $error )
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>

            @endif

        </div>

        <form action="{{route('product.edit', ['product' => $product] ) }}" method="post">
            @csrf
            @method("post")
            <label for="name">Enter Product Name : </label>
            <input type="text" name="name" id="name" value="{{$product->name}}"><br><br>
            <label for="qty">Enter Product Quantity : </label>
            <input type="text" name="qty" id="qty" value="{{$product->qty}}"><br><br>
            <label for="price">Enter Product Price : </label>
            <input type="text" name="price" id="price" value="{{$product->price}}"><br><br>
            <label for="description">Enter Product Description : </label>
            <input type="text" name="description" id="description" value="{{$product->description}}"><br><br>
            <input type="submit" value="Create" name="create" >
        </form>
    </div>
</body>
</html>