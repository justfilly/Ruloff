<input type="checkbox" id="menu-toggle" class="d-none">
<header class="bg-light py-3 border-bottom">
    <div class="container">
        <div class="row align-items-center w-100">
            <div class="col-6 d-lg-none">
                <label for="menu-toggle" class="btn btn-outline-dark menu-btn">
                    <i class="bi bi-list"></i>
                </label>
            </div>

            <div class="col-lg-3 d-none d-lg-block text-start">
                <div class="contact-info">
                    <span>
                        <i class="bi bi-telephone"></i> 
                        Телефон: <a href="tel:+79991234567">+7 (999) 123-45-67</a>
                    </span>
                    <span>
                        <i class="bi bi-geo-alt"></i> 
                        Адрес: ул. Примерная, 123
                    </span>
                </div>
            </div>

            <div class="col-lg-6 d-none d-lg-block text-center">
                <nav class="">
                    <ul class="list-unstyled mb-0">
                        <li><a href="#prices" class="nav-link">Цены</a></li>
                        <li><a href="#products" class="nav-link">Примеры работ</a></li>
                        <li><a href="#reviews" class="nav-link">Отзывы</a></li>
                        <li><a href="#map" class="nav-link">Карта</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-3 d-none d-lg-block text-end">
                <div class="social-links">
                    <a href="https://www.avito.ru" target="_blank" class="social-link">
                        <img src="{{ asset('svg/avito.svg') }}" alt="Avito" class="social-icon">
                    </a>
                    <a href="https://vk.com" target="_blank" class="social-link">
                        <img src="{{ asset('svg/vk.svg') }}" alt="VK" class="social-icon">
                    </a>
                    <a href="https://t.me" target="_blank" class="social-link">
                        <img src="{{ asset('svg/telegram.svg') }}" alt="Telegram" class="social-icon">
                    </a>
                </div>
            </div>

            <div class="col-6 d-lg-none text-end">
                <div class="social-links text-end">
                    <a href="https://www.avito.ru" target="_blank" class="social-link">
                        <img src="{{ asset('svg/avito.svg') }}" alt="Avito" class="social-icon">
                    </a>
                    <a href="https://vk.com" target="_blank" class="social-link">
                        <img src="{{ asset('svg/vk.svg') }}" alt="VK" class="social-icon">
                    </a>
                    <a href="https://t.me" target="_blank" class="social-link">
                        <img src="{{ asset('svg/telegram.svg') }}" alt="Telegram" class="social-icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu">
    <label for="menu-toggle" class="menu-overlay"></label>
    <div class="menu-content">
        <label for="menu-toggle" class="btn btn-outline-dark menu-btn close-btn">
            <i class="bi bi-x"></i>
        </label>
        <ul class="list-unstyled mt-8">
            <li><a href="#prices" class="nav-link"><i class="bi bi-tag"></i> Цены</a></li>
            <li><a href="#products" class="nav-link"><i class="bi bi-images"></i> Примеры работ</a></li>
            <li><a href="#reviews" class="nav-link"><i class="bi bi-star"></i> Отзывы</a></li>
            <li><a href="#map" class="nav-link"><i class="bi bi-geo-alt"></i> Карта</a></li>
        </ul>
        <hr>
        <div class="menu-contact">
            <div class="menu-phone">
                <i class="bi bi-telephone"></i> 
                <a href="tel:+79991234567">+7 (999) 123-45-67</a>
            </div>
            <div class="menu-address">
                <i class="bi bi-geo-alt"></i> 
                ул. Примерная 123
            </div>
        </div>
    </div>
</div>
