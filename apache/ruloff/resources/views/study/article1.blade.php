@extends('layout')

@section('title', 'Перетяжка руля BMW X5 — Nappa, неопрен, Alpina')
@section('description', 'Детальная статья о перетяжке руля BMW X5: кожа Nappa, шов BMW Alpina и максимальный комфорт.')
@section('keywords', 'перетяжка руля BMW X5, руль Nappa, обтяжка руля, фирменный шов BMW Alpina, кожаный руль BMW, обшивка руля X5')

@section('content')
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1, h2 {
            color: #222;
        }

        .section {
            background-color: #ffffff;
            padding: 25px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .section img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin: 20px 0;
        }

        p {
            line-height: 1.6;
            font-size: 1rem;
            color: #444;
        }
    </style>

    <div class="container">
        <h1>Перетяжка руля BMW X5: премиум-качество и стиль</h1>

        <div class="section">
            <h2>Материалы и подход</h2>
            <p>Мы предлагаем услугу <strong>перетяжки руля BMW X5</strong> с использованием высококачественной кожи <strong>Nappa Wollsdorf</strong>. Это сочетание гладкой и перфорированной кожи создаёт не только премиальный внешний вид, но и улучшает сцепление и тактильные ощущения во время вождения.</p>
            <img src="{{ asset('images/bmw-x5-1.jpg') }}" alt="Перетяжка руля BMW X5 - этап работы">
        </div>

        <div class="section">
            <h2>Уникальные особенности</h2>
            <p>Каждый руль оснащён <strong>неопреновой подложкой</strong>, что повышает мягкость и комфорт при захвате. Особым элементом отделки является <strong>фирменный шов "BMW Alpina"</strong>, который подчёркивает индивидуальность автомобиля и сохраняет эстетическое соответствие оригинальному стилю BMW.</p>
            <img src="{{ asset('images/bmw-x5-2.jpg') }}" alt="Готовый руль BMW X5 с Alpina швом">
        </div>

        <div class="section">
            <h2>Преимущества для владельцев BMW X5</h2>
            <p>Мы учитываем все пожелания клиента при работе над <strong>перетяжкой руля BMW X5</strong>. Результат — руль, который выглядит как новый, приятно ощущается в руках и подчёркивает статус автомобиля. Используемые материалы — оригинальная <strong>кожа Nappa Wollsdorf</strong> и прочная нейлоновая нить — гарантируют долговечность и износостойкость.</p>
        </div>
    </div>
@endsection
