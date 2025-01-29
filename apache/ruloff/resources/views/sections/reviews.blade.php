<section id="reviews" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Отзывы наших клиентов</h2>
        <div class="reviews-container">
            @foreach($reviews as $review)
                <div class="review-item">
                    <img src="{{ asset('storage/' . $review->image) }}" alt="Review" class="img-fluid rounded">
                </div>
            @endforeach
        </div>
    </div>
</section>