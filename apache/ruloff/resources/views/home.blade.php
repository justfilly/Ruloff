    @extends('layout')

    @section('title', 'Перетяжка руля в Нижнем Новгороде - Руль сервис 52')
    @section('description', 'Закажите качественную перетяжку руля в Нижнем Новгороде. Мы предлагаем экокожу, натуральную кожу, разнообразие цветов и нитей для вашего автомобиля. Быстро, профессионально, с гарантией.')    

    @section('content')
        @include('sections.hero')
        @include('sections.prices')
        @include('sections.products')
        @include('sections.reviews')
        @include('sections.faq')
    @endsection
