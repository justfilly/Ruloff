@extends('layout')

@section('title', 'Перетяжка руля Volkswagen Passat B6 — Nappa и красная строчка')
@section('description', 'Подробная статья о перетяжке руля Passat B6: гладкая кожа Nappa Wollsdorf, спортивный стиль и красная строчка.')
@section('keywords', 'перетяжка руля Passat B6, руль Nappa, красная строчка, обтяжка руля, спортивный руль, кожа Wollsdorf')

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
        <h1><strong>Перетяжка руля Volkswagen Passat B6</strong>: спортивный акцент и комфорт</h1>

        <div class="section">
            <h2>Индивидуальный стиль</h2>
            <p><strong><u>Перетяжка руля Passat B6</u></strong> — это идеальное решение для тех, кто хочет обновить интерьер своего автомобиля и придать ему более спортивный характер. Мы используем мягкую и прочную <strong><em>кожу Nappa Wollsdorf</em></strong>, которая не только приятна на ощупь, но и отличается высокой износостойкостью.</p>
            <img src="{{ asset('images/passat-b6-1.jpg') }}" alt="Процесс перетяжки руля Volkswagen Passat B6">
        </div>

        <div class="section">
            <h2>Выразительная отделка</h2>
            <p>Ключевая особенность — <strong><u>контрастная красная строчка</u></strong>, которая подчёркивает <em>спортивный стиль</em> и гармонирует с интерьером <strong>Passat B6</strong>. Точная и аккуратная прострочка придаёт рулю характер, делая его неотъемлемой частью визуальной концепции салона.</p>
            <img src="{{ asset('images/passat-b6-2.jpg') }}" alt="Готовый руль Passat B6 с красной строчкой">
        </div>

        <div class="section">
            <h2>Качество и долговечность</h2>
            <p>Мы уделяем внимание каждому этапу: от демонтажа до финальной обработки. Все материалы подбираются с учётом спецификации модели. <strong><u>Перетянутый руль Passat B6</u></strong> не только выглядит эффектно, но и обеспечивает комфорт при ежедневной эксплуатации, благодаря использованию <strong><em>Nappa Wollsdorf</em></strong> и <em>усиленных нитей</em>.</p>
        </div>
    </div>
@endsection
