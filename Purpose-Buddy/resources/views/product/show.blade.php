<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <div class="container">

        <div class="create">
            <button >
                <a href="{{route('product.create')}}">
                Create a New Product
                </a>
            </button>
        </div>

        <div class="success">

            @if( session()->has('success') )
                <h1>
                    {{session('success')}}
                </h1>
            @endif

        </div>

        <table align="center" border="2px solid black" style=" margin-top : 300px;   border-collapse:collapse; " >
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach( $products as $product )

                <tr>
                    <td> {{ $product->id }} </td>
                    <td> {{ $product->name }} </td>
                    <td> {{ $product->qty }} </td>
                    <td> {{ $product->price }} </td>
                    <td> {{ $product->description }} </td>
                    <td> <a href=" {{ route('product.update' , ['product' => $product ]) }} "> Update </a> </td>
                    <td> <a href=" {{ route('product.delete' , ['product' => $product ]) }} "> Delete </a> </td>
                </tr>

            @endforeach

        </table>
    </div>
</body>
</html>