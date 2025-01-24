<section class="hero py-5 text-white text-center">
    <div class="container">
        <h2 class="display-4 mb-3">Преобразите свой руль</h2>
        <p class="lead mb-4">Закажите профессиональную обтяжку и придайте рулю уникальный вид.</p>

        <form action="{{ route('order.store') }}" method="POST" class="w-50 mx-auto p-4 bg-white rounded shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Ваше имя</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Номер телефона</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Оставить заявку</button>
        </form>
    </div>
</section>
