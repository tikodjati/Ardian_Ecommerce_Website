<h2>Edit Product</h2>

<form method="POST"
      action="{{ route('products.update', $product->id) }}"
      enctype="multipart/form-data">
@csrf
@method('PUT')

<label>Name</label><br>
<input type="text"
       name="name"
       value="{{ $product->name }}"
       required><br><br>

<label>Description</label><br>
<textarea name="description" rows="4">
{{ $product->description }}
</textarea><br><br>

<label>Price</label><br>
<input type="number"
       step="0.01"
       name="price"
       value="{{ $product->price }}"
       required><br><br>

<label>Category</label><br>
<select name="category_id" required>
    @foreach($categories as $cat)
        <option value="{{ $cat->id }}"
            {{ $product->category_id == $cat->id ? 'selected' : '' }}>
            {{ $cat->name }}
        </option>
    @endforeach
</select><br><br>

<label>Collections</label><br>
@foreach($collections as $col)
    <label>
        <input type="checkbox"
               name="collections[]"
               value="{{ $col->id }}"
               {{ $product->collections->contains($col->id) ? 'checked' : '' }}>
        {{ $col->name }}
    </label><br>
@endforeach
<br>

<label>Materials</label><br>
@foreach($materials as $mat)
    <label>
        <input type="checkbox"
               name="materials[]"
               value="{{ $mat->id }}"
               {{ $product->materials->contains($mat->id) ? 'checked' : '' }}>
        {{ $mat->name }}
    </label><br>
@endforeach
<br>

<h4>Existing Images</h4>

@foreach($product->images as $img)
    <div style="display:inline-block; margin:10px;">
        <img src="{{ asset('storage/'.$img->image_url) }}"
             width="100"><br>

        <form action="{{ route('products.deleteImage', $img->id) }}"
              method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach

<br><br>

<label>Upload New Images</label><br>
<input type="file" name="images[]" multiple><br><br>

<label>
    <input type="checkbox"
           name="is_featured"
           {{ $product->is_featured ? 'checked' : '' }}>
    Featured
</label><br>

<label>
    <input type="checkbox"
           name="is_new_arrival"
           {{ $product->is_new_arrival ? 'checked' : '' }}>
    New Arrival
</label><br>

<label>
    <input type="checkbox"
           name="is_active"
           {{ $product->is_active ? 'checked' : '' }}>
    Active
</label><br><br>

<button type="submit">Update</button>

</form>
