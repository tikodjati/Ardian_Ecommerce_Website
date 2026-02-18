<h2>Tambah Product</h2>

<form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
    @csrf

    <label>Name</label><br>
    <input type="text" name="name" required><br><br>

    <label>Description</label><br>
    <textarea name="description" rows="4"></textarea><br><br>

    <label>Price</label><br>
    <input type="number" step="0.01" name="price" required><br><br>

    <label>Category</label><br>
    <select name="category_id" required>
        <option value="">-- Pilih Category --</option>
        @foreach($categories as $cat)
        <option value="{{ $cat->id }}">
            {{ $cat->name }}
        </option>
        @endforeach
    </select><br><br>

    <label>Collections</label><br>
    @foreach($collections as $col)
    <label>
        <input type="checkbox" name="collections[]" value="{{ $col->id }}">
        {{ $col->name }}
    </label><br>
    @endforeach
    <br>

    <label>Materials</label><br>
    @foreach($materials as $mat)
    <label>
        <input type="checkbox" name="materials[]" value="{{ $mat->id }}">
        {{ $mat->name }}
    </label><br>
    @endforeach
    <br>

    <label>Upload Images</label><br>
    <input type="file" name="images[]" multiple><br><br>

    <label>
        <input type="checkbox" name="is_featured">
        Featured
    </label><br>

    <label>
        <input type="checkbox" name="is_new_arrival">
        New Arrival
    </label><br>

    <label>
        <input type="checkbox" name="is_active" checked>
        Active
    </label><br><br>

    <button type="submit">Save</button>

</form>