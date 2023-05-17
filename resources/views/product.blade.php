<!-- product.blade.php -->
<div class="container">
    <div class="row">
    <div class="View_crt"><a href="{{ route('viewcart.index') }}">View Cart</a>
            </div>
        @foreach($products as $product)
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p><strong>ID:</strong> {{ $product->id }}</p>
            <p><strong>Description:</strong> {{ $product->description }}</p>
            <p><strong>Price:</strong> ${{ $product->price }}</p>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit">Add to Cart</button>
            </form>
            <!-- <div class="View_crt"><a href="{{ route('viewcart.index', ['id' => $product->id]) }}">View Cart</a>
            </div> -->
            
        </div>
        @endforeach
    </div>
    
</div>

