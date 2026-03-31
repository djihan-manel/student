<h1>تعديل منتج</h1> 
 
<form action="{{ route('products.update', $product) }}" method="POST"> 
    @csrf 
    @method('PUT') 
    <input type="text" name="name" value="{{ $product->name }}"><br><br> 
    <textarea name="description">{{ $product->description }}</textarea><br><br> 
    <input type="number" step="0.01" name="price" value="{{ $product->price 
}}"><br><br> 
    <input type="number" name="quantity" value="{{ $product->quantity 
}}"><br><br> 
    <button type="submit">تحديث</button> 
</form>