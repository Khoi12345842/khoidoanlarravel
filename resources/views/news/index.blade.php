@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Danh sách tin tức</h2>
    <a href="{{ route('news.create') }}" class="btn btn-success mb-3">Thêm Tin Tức</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tiêu đề</th>
                <th>Danh mục</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->category->name ?? 'Chưa có danh mục' }}</td>
                <td>
                    @if($item->thumbnail)
                        <img src="{{ asset('storage/' . $item->thumbnail) }}" width="100">
                    @else
                        Không có ảnh
                    @endif
                </td>
                <td>
                    <a href="{{ route('news.show', $item->id) }}" class="btn btn-info btn-sm">Xem</a>
                    <a href="{{ route('news.edit', $item->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Phân trang -->
    {{ $news->links() }}
</div>
@endsection
