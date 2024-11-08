
<h1>Create Product</h1>
<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label>Product ID:</label>
    <input type="text" name="product_id" required>
    <label>Name:</label>
    <input type="text" name="name" required>
    <label>Description:</label>
    <textarea name="description"></textarea>
    <label>Price:</label>
    <input type="number" step="0.01" name="price" required>
    <label>Stock:</label>
    <input type="number" name="stock">
    <label>Image:</label>
    <input type="text" name="image">
    <button type="submit">Submit</button>
</form>
