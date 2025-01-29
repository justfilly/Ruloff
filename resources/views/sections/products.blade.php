<section id="products" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Примеры работ</h2>
        <div class="row g-4">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="product-card p-4 border text-center">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>