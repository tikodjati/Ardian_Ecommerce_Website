<h2>Tambah Category</h2>

<form method="POST" action="{{ route('categories.store') }}">
    @csrf

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Parent</label>
    <select name="parent_id">
        <option value="">-- None --</option>
        @foreach($parents as $parent)
            <option value="{{ $parent->id }}">
                {{ $parent->name }}
            </option>
        @endforeach
    </select>

    <label>Sort Order</label>
    <input type="number" name="sort_order" value="0">

    <label>Active</label>
    <input type="checkbox" name="is_active" value="1" checked>

    <button type="submit">Save</button>
</form>
