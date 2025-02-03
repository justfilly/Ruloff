<section id="reviews" class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Отзывы наших клиентов</h3>
        
        <div class="swiper reviewsSwiper">
            <div class="swiper-wrapper">
                @foreach($reviews as $review)
                    <div class="swiper-slide">
                        <div class="review-item">
                            <img src="{{ asset('storage/' . $review->image) }}" alt="Review" class="img-fluid rounded">
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>
