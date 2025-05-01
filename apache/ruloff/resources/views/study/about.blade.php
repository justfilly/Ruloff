@extends('layout')

@section('title', 'О компании')
@section('description', 'Узнайте о миссии, ценностях и целях компании Руль Сервис 52 — экспертов по перетяжке рулей в Нижнем Новгороде.')
@section('keywords', 'о компании, наши ценности, миссия, автосервис, перетяжка руля, профессиональная команда, Руль Сервис 52')


@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        .block {
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        }

        .purpose {
            background-color: #ffffff;
            border-left: 5px solid #007bff;
        }

        .values {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
        }

        .mission {
            background-color: #fff3cd;
            border-left: 5px solid #ffc107;
        }

        .history {
            background-color: #d4edda;
            border-left: 5px solid #28a745;
        }

        .achievements {
            background-color: #f1f1f1;
            border: 2px dashed #6c757d;
        }

        h2 {
            margin-top: 0;
            color: #222;
        }

        p {
            font-size: 1rem;
            color: #555;
            line-height: 1.6;
        }
    </style>

    <div class="container">
        <h1>О компании «Руль Сервис 52»</h1>

        <div class="block purpose">
            <h2>Наша цель</h2>
            <p>Предоставлять премиальные услуги по перетяжке рулей, объединяя эстетику, комфорт и надёжность в каждом автомобиле клиента.</p>
        </div>

        <div class="block values">
            <h2>Наши ценности</h2>
            <p>Мы строим наш сервис на основе доверия, мастерства и уважения. Каждый руль — это ручная работа с душой, выполненная с вниманием к деталям.</p>
        </div>

        <div class="block mission">
            <h2>Наша миссия</h2>
            <p>Сделать качественные услуги обтяжки рулей доступными для каждого жителя Нижнего Новгорода, предоставляя индивидуальный подход и превосходный результат.</p>
        </div>

        <div class="block history">
            <h2>Наша история</h2>
            <p>С 2020 года мы успешно работаем в сфере тюнинга интерьера автомобилей. Начав как небольшой сервис, мы выросли в команду специалистов, доверие к которым выражается в сотнях положительных отзывов.</p>
        </div>

        <div class="block achievements">
            <h2>Наши достижения</h2>
            <p>✓ Более 2000 выполненных заказов<br>
               ✓ Постоянные клиенты из Нижнего Новгорода и области<br>
               ✓ Работаем с экзотическими материалами: алькантара, Nappa, перфорированная кожа<br>
               ✓ Поддержка клиентов на всех этапах — от консультации до гарантии</p>
        </div>

        <div class="block" style="background-color: #ffffff; border-left: 5px solid #17a2b8;">
            <h2>Читайте также</h2>
            <p><a href="{{ url('/article2') }}">Перетяжка руля Volkswagen Passat B6 — Nappa и красная строчка</a></p>
            <p><a href="{{ url('/article1') }}">Перетяжка руля BMW X5 — Nappa, неопрен, Alpina</a></p>
        </div>

    </div>
@endsection
