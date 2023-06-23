<!DOCTYPE html>
<html>
<head>
    <title>Категорії</title>
</head>
<body>
    <h1>Категорії</h1>

    <ul>
        @foreach ($categories as $category)
            <li>
                <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
