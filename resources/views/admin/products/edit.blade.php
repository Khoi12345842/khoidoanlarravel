<!DOCTYPE html>
<html>
<head>
    <title>Chỉnh sửa sản phẩm</title>
</head>
<body>
    <h1>Chỉnh sửa sản phẩm</h1>
    <form action="{{ route('admin.products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Tên sản phẩm:</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>
        <div>
            <label>Danh mục:</label>
            <input type="text" name="category" value="{{ $product->category }}" required>
        </div>
        <div>
            <label>Mô tả:</label>
            <textarea name="description">{{ $product->description }}</textarea>
        </div>
        <div>
            <label>Giá:</label>
            <input type="number" name="price" value="{{ $product->price }}" required>
        </div>
        <div>
            <label>Hình ảnh:</label>
            <input type="text" name="image" value="{{ $product->image }}">
        </div>
        <div>
            <label>Trạng thái:</label>
            <select name="active">
                <option value="1" {{ $product->active ? 'selected' : '' }}>Kích hoạt</option>
                <option value="0" {{ !$product->active ? 'selected' : '' }}>Không kích hoạt</option>
            </select>
        </div>
        <button type="submit">Cập nhật</button>
    </form>
</body>
</html>