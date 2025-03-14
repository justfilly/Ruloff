@extends('layout')

@section('title', $product->name . ' - Руль сервис 52')
@section('description', Str::limit($product->detailed_description, 160))

@section('content')
    <div class="product-detail-page container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">{{ $product->name }}</h2>
                <div class="text-center mb-4">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="max-width: 80%; height: auto;">
                </div>
                <p class="lead text-muted">{{ $product->detailed_description }}</p>
                <a href="{{ url()->previous() }}" class="btn btn-primary mt-4">Back</a>
            </div>
        </div>
    </div>

    <style>
        .product-detail-page {
            background-color: #f9f9f9;
            border-radius: 10px;
            padding: 30px;
        }

        .product-detail-page h2 {
            font-family: 'Arial', sans-serif;
            font-size: 2rem;
            color: #333;
        }

        .product-detail-page .lead {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #555;
        }

        .product-detail-page img {
            max-width: 90%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-detail-page .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .product-detail-page .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
@endsection
