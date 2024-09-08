<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
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

        <form action="{{route('product.store')}}" method="post">
            @csrf
            @method("post")
            <label for="name">Enter Product Name : </label>
            <input type="text" name="name" id="name"><br><br>
            <label for="qty">Enter Product Quantity : </label>
            <input type="text" name="qty" id="qty"><br><br>
            <label for="price">Enter Product Price : </label>
            <input type="text" name="price" id="price"><br><br>
            <label for="description">Enter Product Description : </label>
            <input type="text" name="description" id="description"><br><br>
            <input type="submit" value="Create" name="create" >
        </form>
    </div>
</body>
</html>