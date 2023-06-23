<!DOCTYPE html>
<html>
<head>
    <title>Продукт: {{ $product->name }}</title>
</head>
<body>
    <h1>Продукт: {{ $product->name }}</h1>

    <h3>Опис: {{ $product->description }}</h3>

    <h2>Категорії</h2>

    <ul>
        @foreach ($product->categories as $category)
            <li>
                <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
