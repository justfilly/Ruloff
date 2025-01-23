<section class="hero">
    <div class="container">
        <h2>Преобразите свой руль</h2>
        <p>Закажите профессиональную обтяжку и придайте рулю уникальный вид.</p>

        <form action="" method="POST">
            @csrf
            <div>
                <label for="name">Ваше имя</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="phone">Номер телефона</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="consent" required>
                    Согласие на обработку данных
                </label>
            </div>
            <button type="submit" class="cta-btn">Оформить заказ</button>
        </form>
    </div>
</section>
