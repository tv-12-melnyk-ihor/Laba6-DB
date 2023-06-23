<!DOCTYPE html>
<html>
<head>
    <title>Категорія: {{ $category->name }}</title>
</head>
<body>
    <h1>Категорія: {{ $category->name }}</h1>

    <h3>Опис: {{ $category->description }}</h3>

    <h2>Продукти</h2>

    <ul>
        @foreach ($category->products as $product)
            <li>
                <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
