@extends('layout')

@section('title', 'Сотрудники компании')
@section('description', 'Познакомьтесь с командой Руль Сервис 52 — профессионалами, заботящимися о вашем комфорте за рулём.')
@section('keywords', 'наша команда, сотрудники автосервиса, специалисты по перетяжке, персонал, профессионалы, Руль Сервис 52')

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

        h1, h2, h3 {
            color: #333;
        }

        .employee {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            margin-bottom: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .employee-img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-right: 20px;
            object-fit: cover;
        }

        .employee h2 {
            margin: 0;
            font-size: 1.5rem;
        }

        .employee p {
            margin: 5px 0;
            color: #555;
        }

        .comments {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .comment {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .comment p {
            font-size: 1rem;
            color: #444;
        }

        .social-links {
            margin-bottom: 20px;
        }

        .social-link {
            display: inline-block;
            margin-right: 15px;
            font-size: 1.2rem;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .social-link:hover {
            color: #0056b3;
        }

        .feedback-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .feedback-form .form-label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .feedback-form .form-control {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .feedback-form .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .feedback-form button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 1.1rem;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .feedback-form button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <h1>Наши сотрудники</h1>
        
        <div class="employee">
            <img src="{{ asset('images/employee1.png') }}" alt="Сотрудник 1" class="employee-img">
            <div>
                <h2>Иван Иванов</h2>
                <p>Телефон: +7 (900) 123-45-67</p>
                <p>Иван — ведущий специалист, занимающийся координацией всех процессов по производству и контролю качества.</p>
            </div>
        </div>

        <div class="employee">
            <img src="{{ asset('images/employee2.png') }}" alt="Сотрудник 2" class="employee-img">
            <div>
                <h2>Мария Петрова</h2>
                <p>Телефон: +7 (900) 234-56-78</p>
                <p>Мария работает с клиентами, помогая им выбрать лучшие услуги и отвечая на все вопросы о процессе обтяжки рулей.</p>
            </div>
        </div>

        <h3>Отзывы</h3>
        <div class="comments">
            @foreach ($reviews as $review)
                <div class="comment">
                    <p><strong>{{ $review->user_name }}</strong> оставил отзыв о товаре <strong>{{ $review->product->name ?? 'Неизвестно' }}</strong>:</p>
                    <p>{{ $review->review_text }}</p>
                </div>
            @endforeach

            @if ($reviews->isEmpty())
                <p>Пока нет отзывов.</p>
            @endif
        </div>

        <h3>Наши социальные сети</h3>
        <div class="social-links">
            <a href="#" class="social-link">Facebook</a>
            <a href="#" class="social-link">Instagram</a>
            <a href="#" class="social-link">Vkontakte</a>
        </div>
    </div>
@endsection
