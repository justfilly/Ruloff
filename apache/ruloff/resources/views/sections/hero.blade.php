<section class="hero py-5 text-white text-center">
    <div class="container">
        <h2 class="display-4 mb-3">Преобразите свой руль</h2>
        <p class="lead mb-4">Закажите профессиональную обтяжку и придайте рулю уникальный вид.</p>

        <form action="{{ route('order.store') }}" method="POST" class="w-75 mx-auto p-4 bg-transparent rounded">
            @csrf
            <div class="mb-3 d-flex justify-content-center fields-container">
                <div class="flex-grow-1">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ваше имя">
                </div>
                <div class="flex-grow-1">
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+7 (___) ___-__-__" maxlength="18">
                </div>
                <div class="flex-grow-0">
                    <button type="submit" class="btn btn-primary">Оставить заявку</button>
                </div>
            </div>
            <div class="mb-3 d-flex align-items-center justify-content-center checkbox-container">
                <input type="checkbox" class="form-check-input me-2 toggle-checkbox" id="consent" name="consent">
                <label class="form-check-label" for="consent">Согласие на обработку персональных данных</label>
            </div>
        </form>
    </div>

    @if(session('form_submitted'))
        <div id="success-popup" class="position-fixed top-0 start-50 translate-middle-x mt-3 px-4 py-3 bg-success text-white rounded shadow" style="z-index: 1050; opacity: 1; transition: opacity 1s ease;">
            Заявка успешно создана
        </div>
    @endif
</section>
