<section id="products" class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Примеры работ</h3>
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide">
                        <div class="product-card">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                            <h4><a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a></h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
