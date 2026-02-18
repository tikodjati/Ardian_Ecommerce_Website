<h2>Edit Category</h2>

@if(session('success'))
    <p style="color:green;">
        {{ session('success') }}
    </p>
@endif

<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Name</label><br>
        <input type="text"
               name="name"
               value="{{ old('name', $category->name) }}"
               required>
    </div>

    <br>

    <div>
        <label>Parent Category</label><br>
        <select name="parent_id">
            <option value="">-- None --</option>

            @foreach($parents as $parent)
                <option value="{{ $parent->id }}"
                    {{ $category->parent_id == $parent->id ? 'selected' : '' }}>
                    {{ $parent->name }}
                </option>
            @endforeach
        </select>
    </div>

    <br>

    <div>
        <label>Sort Order</label><br>
        <input type="number"
               name="sort_order"
               value="{{ old('sort_order', $category->sort_order) }}">
    </div>

    <br>

    <div>
        <label>
            <input type="checkbox"
                   name="is_active"
                   value="1"
                   {{ $category->is_active ? 'checked' : '' }}>
            Active
        </label>
    </div>

    <br>

    <button type="submit">Update Category</button>
</form>

<br>

<a href="{{ route('categories.index') }}">← Back to list</a>
