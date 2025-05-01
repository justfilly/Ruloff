@extends('layout')

@section('title', 'Оставить отзыв')
@section('description', 'Оставьте отзыв о нашей услуге перетяжки рулей. Ваше мнение помогает нам становиться лучше.')
@section('keywords', 'отзывы клиентов, мнение клиентов, оставить отзыв, обратная связь, отзывы об услугах, Руль Сервис 52')

@section('content')
<div class="container">
    <h1>Оставить отзыв о товаре</h1>

    <form method="POST" action="{{ route('reviews.store') }}">
        @csrf

        <div class="mb-3">
            <label for="product_id" class="form-label">Выберите товар</label>
            <select name="product_id" id="product_id" class="form-control" required>
                @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="user_name" class="form-label">Ваше имя</label>
            <input type="text" name="user_name" id="user_name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="review_text" class="form-label">Отзыв</label>
            <textarea name="review_text" id="review_text" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Отправить отзыв</button>
    </form>
</div>
@endsection
