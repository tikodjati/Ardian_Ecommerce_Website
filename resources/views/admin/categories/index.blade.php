<h1>Categories</h1>

<a href="{{ route('categories.create') }}">Tambah Category</a>

<table border="1" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Parent</th>
        <th>Status</th>
        <th>Action</th>
    </tr>

    @foreach($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->parent->name ?? '-' }}</td>
            <td>{{ $category->is_active ? 'Active' : 'Inactive' }}</td>

            {{-- <td>
                <a href="{{ route('categories.edit', $category->id) }}">Edit</a>

                <form action="{{ route('categories.destroy', $category->id) }}" 
                    method="POST" 
                    style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">
                        Delete
                    </button>
                </form>
            </td> --}}
            
            <td>

                <a href="{{ route('categories.edit', $category->id) }}">
                    Edit
                </a>

                <form action="{{ route('categories.destroy', $category->id) }}"
                    method="POST"
                    style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">
                        Delete
                    </button>
                </form>

                <form action="{{ route('categories.toggle', $category->id) }}"
                    method="POST"
                    style="display:inline;">
                    @csrf
                    @method('PATCH')
                    <button type="submit">
                        {{ $category->is_active ? 'Deactivate' : 'Activate' }}
                    </button>
                </form>

            </td>

        </tr>
    @endforeach
</table>
