@extends('layout')

@section('title', 'Новости – Перетяжка рулей')
@section('description', 'Свежие новости о нашей мастерской по перетяжке рулей. Узнайте о новых акциях и услугах.')

@section('content')
    <h1 class="mb-4">Новости</h1>
    <div class="row">
        <article class="col-md-6 mb-4">
            <h2><a href="{{ route('news.opening') }}" class="text-decoration-none text-dark">Открытие мастерской по перетяжке рулей</a></h2>
            <p>Сегодня мы рады объявить об открытии нашей мастерской по <strong>перетяжке рулей</strong>. Теперь ваш автомобиль сможет обрести новый стиль, а руль – комфортное и долговечное покрытие.</p>
        </article>

        <article class="col-md-6 mb-4">
            <h2><a href="{{ route('news.discount') }}" class="text-decoration-none text-dark">Скидка 20% на перетяжку руля!</a></h2>
            <p>Только до конца месяца мы предлагаем <strong>скидку 20%</strong> на все виды перетяжки рулей! Это отличная возможность обновить руль вашего автомобиля и сэкономить.</p>
        </article>

        <article class="col-md-6 mb-4">
            <h2><a href="{{ route('news.premium-leather') }}" class="text-decoration-none text-dark">Поставка премиальной кожи от LeatherMaster для обтяжки рулей</a></h2>
            <p>Мы с гордостью объявляем о получении новой поставки <strong>премиальной кожи от LeatherMaster</strong> для перетяжки рулей. В этой поставке представлены уникальные варианты кожи, которые идеально подойдут для вашего автомобиля.</p>
        </article>
    </div>

    <a href="{{ route('home') }}" class="btn btn-secondary">На главную</a>
@endsection
