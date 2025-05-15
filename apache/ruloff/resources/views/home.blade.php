    @extends('layout')

    @section('title', 'Перетяжка руля в Нижнем Новгороде - Руль сервис 52')
    @section('description', 'Закажите качественную перетяжку руля в Нижнем Новгороде. Мы предлагаем экокожу, натуральную кожу, разнообразие цветов и нитей для вашего автомобиля. Быстро, профессионально, с гарантией.')    
    @section('keywords', 'перетяжка руля, Нижний Новгород, руль сервис 52, экокожа, натуральная кожа, автомобильный руль, ремонт руля, обтяжка руля, тюнинг салона, перешив руля')

    @section('content')
        @include('common.toast')
        @include('sections.hero')
        @include('sections.prices')
        @include('sections.products')
        @include('sections.reviews')
        @include('sections.map')
        @include('sections.faq')
    @endsection
