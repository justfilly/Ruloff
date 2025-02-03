<section id="products" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Примеры работ</h2>
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide">
                        <div class="product-card">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                            <h3>{{ $product->name }}</h3>
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
