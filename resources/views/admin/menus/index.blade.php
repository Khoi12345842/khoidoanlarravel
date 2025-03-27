<!DOCTYPE html>
<html>
<head>
    <title>Manage Menus</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions a {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Manage Menus</h1>

    @if (session('error'))
        <div style="color: red; margin: 10px 0;">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div style="color: green; margin: 10px 0;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.menus.create') }}">Add New Menu</a>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>New Tab</th>
                <th>Order</th>
                <th>Parent</th>
                <th>Relate ID</th>
                <th>Active</th>
                <th>Router</th>
                <th>Params</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menus as $menu)
                <tr>
                    <td>{{ $menu->title }}</td>
                    <td>
                        @if($menu->mtype == 1) Tin bài
                        @elseif($menu->mtype == 2) Sản phẩm
                        @elseif($menu->mtype == 3) Link
                        @endif
                    </td>
                    <td>{{ $menu->new_tab ? 'Yes' : 'No' }}</td>
                    <td>{{ $menu->no }}</td>
                    <td>{{ $menu->parent ? $menu->parent->title : 'None' }}</td>
                    <td>{{ $menu->relate_id }}</td>
                    <td>{{ $menu->active ? 'Yes' : 'No' }}</td>
                    <td>{{ $menu->router ?? 'N/A' }}</td>
                    <td>{{ $menu->params ? json_encode($menu->params) : 'N/A' }}</td>
                    <td class="actions">
                        <a href="{{ route('admin.menus.edit', $menu) }}">Edit</a>
                        <form action="{{ route('admin.menus.destroy', $menu) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @foreach($menu->children as $child)
                    <tr>
                        <td>↳ {{ $child->title }}</td>
                        <td>
                            @if($child->mtype == 1) Tin bài
                            @elseif($child->mtype == 2) Sản phẩm
                            @elseif($child->mtype == 3) Link
                            @endif
                        </td>
                        <td>{{ $child->new_tab ? 'Yes' : 'No' }}</td>
                        <td>{{ $child->no }}</td>
                        <td>{{ $child->parent ? $child->parent->title : 'None' }}</td>
                        <td>{{ $child->relate_id }}</td>
                        <td>{{ $child->active ? 'Yes' : 'No' }}</td>
                        <td>{{ $child->router ?? 'N/A' }}</td>
                        <td>{{ $child->params ? json_encode($child->params) : 'N/A' }}</td>
                        <td class="actions">
                            <a href="{{ route('admin.menus.edit', $child) }}">Edit</a>
                            <form action="{{ route('admin.menus.destroy', $child) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
</body>
</html>