<!DOCTYPE html>
<html>
<head>
    <title>Add New Menu</title>
    <style>
        div {
            margin-bottom: 10px;
        }
        label {
            display: inline-block;
            width: 120px;
        }
        span.error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>Add New Menu</h1>
    <form action="{{ route('admin.menus.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
            @error('title')
                <span class="error">{{ $message }}</span>
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
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="new_tab">Open in New Tab:</label>
            <select name="new_tab" id="new_tab" required>
                <option value="1" {{ old('new_tab') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('new_tab') == 0 || old('new_tab') === null ? 'selected' : '' }}>No</option>
            </select>
            @error('new_tab')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="no">Order:</label>
            <input type="number" name="no" id="no" value="{{ old('no', 0) }}" required>
            @error('no')
                <span class="error">{{ $message }}</span>
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
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="relate_id">Relate ID:</label>
            <input type="number" name="relate_id" id="relate_id" value="{{ old('relate_id') }}" required>
            @error('relate_id')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="active">Active:</label>
            <select name="active" id="active" required>
                <option value="1" {{ old('active') == 1 ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ old('active') == 0 || old('active') === null ? 'selected' : '' }}>No</option>
            </select>
            @error('active')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="router">Router:</label>
            <input type="text" name="router" id="router" value="{{ old('router') }}">
            @error('router')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="params">Params (JSON):</label>
            <input type="text" name="params" id="params" value="{{ old('params') }}">
            @error('params')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Create Menu</button>
    </form>
    <a href="{{ route('admin.menus.index') }}">Back to List</a>
</body>
</html>