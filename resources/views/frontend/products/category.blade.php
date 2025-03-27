<!DOCTYPE html>
<html>
<head>
    <title>Danh mục: {{ $category }}</title>
    <style>
        ul { list-style: none; padding: 0; }
        ul ul { margin-left: 20px; }
        .product-item { margin: 10px 0; }
        .product-item img { max-width: 100px; }
    </style>
</head>
<body>
    @include('layouts.header')

    <h1>Danh mục: {{ $category }}</h1>
    @if($items->isEmpty())
        <p>Không có sản phẩm nào trong danh mục này.</p>
    @else
        <ul>
            @foreach($items as $item)
                <li class="product-item">
                    <h3>{{ $item->name }}</h3>
                    @if($item->image)
                        <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}">
                    @endif
                    <p>{{ $item->description }}</p>
                    <p>Giá: {{ number_format($item->price) }} VNĐ</p>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>