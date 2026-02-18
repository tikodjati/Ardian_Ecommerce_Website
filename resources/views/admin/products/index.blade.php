<h2>Products</h2>

<a href="{{ route('products.create') }}">+ Tambah Product</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>Image</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Active</th>
    <th>Action</th>
</tr>

@foreach($products as $product)
<tr>
    <td>
        @if($product->images->first())
            <img src="{{ asset('storage/'.$product->images->first()->image_url) }}" width="60">
        @endif
    </td>
    <td>{{ $product->name }}</td>
    <td>{{ $product->category->name ?? '-' }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->is_active ? 'Yes' : 'No' }}</td>
    <td>
        <a href="{{ route('products.edit',$product->id) }}">Edit</a>

        <form action="{{ route('products.destroy',$product->id) }}"
              method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>

{{ $products->links() }}
