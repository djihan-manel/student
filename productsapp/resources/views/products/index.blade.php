<h1>قائمة المنتجات</h1> 
<a href="{{ route('products.create') }}">إضافة منتج</a> 
<hr> 
@foreach($products as $product) 
    <p> 
        {{ $product->name }} | 
        {{ $product->price }} دج | 
        {{ $product->quantity }} 
      
        <a href="{{ route('products.edit', $product) }}">تعديل</a> 
        <form action="{{ route('products.destroy', $product) }}" method="POST" 
style="display:inline;"> 
            @csrf
             @method('DELETE') 
            <button type="submit">حذف</button> 
        </form> 
    </p> 
@endforeach 