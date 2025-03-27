<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1>Thêm sản phẩm mới</h1>
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div>
            <label>Tên sản phẩm:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Danh mục:</label>
            <input type="text" name="category" required>
        </div>
        <div>
            <label>Mô tả:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Giá:</label>
            <input type="number" name="price" required>
        </div>
        <div>
            <label>Hình ảnh:</label>
            <input type="text" name="image">
        </div>
        <div>
            <label>Trạng thái:</label>
            <select name="active">
                <option value="1">Kích hoạt</option>
                <option value="0">Không kích hoạt</option>
            </select>
        </div>
        <button type="submit">Thêm</button>
    </form>
</body>
</html>