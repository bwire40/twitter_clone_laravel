<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>

<body>
    <h1>Sample Products page</h1>

    @foreach ($products as $product)
        <div>
            <h2>{{ $product['name'] }}</h2>
            <p>{{ $product['description'] }}</p>
            <h4> {{ $product['price'] }}</h4>
        </div>
    @endforeach
</body>

</html>
