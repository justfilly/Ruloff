<section id="products" class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Примеры работ</h3>
        
        <div id="product-gallery">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <div class="swiper-slide">
                            <div class="product-card">
                                <a href="{{ asset('storage/' . $product->image) }}" class="zoomable">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" loading="lazy">
                                </a>
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

    </div>
</section>
