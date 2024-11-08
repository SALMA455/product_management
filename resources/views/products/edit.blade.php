
<h1>Edit Product</h1>
<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    <label>Description:</label>
    <textarea name="description">{{ $product->description }}</textarea>
    <label>Price:</label>
    <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
    <label>Stock:</label>
    <input type="number" name="stock" value="{{ $product->stock }}">
    <label>Image:</label>
    <input type="text" name="image" value="{{ $product->image }}">
    <button type="submit">Update</button>
</form>
