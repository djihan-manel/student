<h1>إضافة منتج</h1> 
 
<form action="{{ route('products.store') }}" method="POST"> 
    @csrf 
    <input type="text" name="name" placeholder="اسم المنتج"><br><br> 
    <textarea name="description" placeholder="الوصف"></textarea><br><br> 
    <input type="number" step="0.01" name="price" placeholder="السعر"><br><br> 
    <input type="number" name="quantity" placeholder="الكمية"><br><br> 
    <button type="submit">حفظ</button> 
</form>