<section id="faq" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Часто задаваемые вопросы</h2>

        <div class="accordion" id="faqAccordion">
            @foreach($faqs as $index => $faq)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}" aria-expanded="false" aria-controls="collapse{{ $index + 1 }}">
                            {{ $faq->question }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index + 1 }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
