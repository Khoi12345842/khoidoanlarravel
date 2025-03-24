<!DOCTYPE html>
<html>
<head>
    <title>Add New Menu</title>
</head>
<body>
    <h1>Add New Menu</h1>
    <form action="{{ route('admin.menus.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="link">Link:</label>
            <input type="text" name="link" id="link" value="{{ old('link') }}" required>
            @error('link')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="mtype">Type:</label>
            <select name="mtype" id="mtype" required>
                <option value="1" {{ old('mtype') == 1 ? 'selected' : '' }}>Tin bài</option>
                <option value="2" {{ old('mtype') == 2 ? 'selected' : '' }}>Sản phẩm</option>
                <option value="3" {{ old('mtype') == 3 ? 'selected' : '' }}>Link</option>
            </select>
            @error('mtype')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="new_tab">Open in New Tab:</label>
            <select name="new_tab" id="new_tab">
                <option value="1" {{ old('new_tab') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('new_tab') == 0 ? 'selected' : '' }}>No</option>
            </select>
            @error('new_tab')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="no">Order:</label>
            <input type="number" name="no" id="no" value="{{ old('no', 0) }}" required>
            @error('no')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="parent_id">Parent Menu:</label>
            <select name="parent_id" id="parent_id">
                <option value="">None</option>
                @foreach($parentMenus as $parent)
                    <option value="{{ $parent->id }}" {{ old('parent_id') == $parent->id ? 'selected' : '' }}>{{ $parent->title }}</option>
                @endforeach
            </select>
            @error('parent_id')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="relate_id">Relate ID:</label>
            <input type="number" name="relate_id" id="relate_id" value="{{ old('relate_id', 0) }}" required>
            @error('relate_id')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="active">Active:</label>
            <select name="active" id="active">
                <option value="1" {{ old('active') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('active') == 0 ? 'selected' : '' }}>No</option>
            </select>
            @error('active')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Create Menu</button>
    </form>
    <a href="{{ route('admin.menus.index') }}">Back to List</a>
</body>
</html>