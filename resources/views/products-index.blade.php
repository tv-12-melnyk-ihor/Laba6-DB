<!DOCTYPE html>
<html>
<head>
    <title>Продукти</title>
</head>
<body>
    <h1>Продукти</h1>

    <ul>
        @foreach ($products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
