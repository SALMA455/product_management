
<h1>Product Details</h1>
<p>Product ID: {{ $product->product_id }}</p>
<p>Name: {{ $product->name }}</p>
<p>Description: {{ $product->description }}</p>
<p>Price: {{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>
<p>Image: {{ $product->image }}</p>
<a href="{{ route('products.index') }}">Back to List</a>
