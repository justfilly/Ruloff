@extends('layout')

@section('title', 'Главная страница')
@section('description', 'Добро пожаловать на нашу главную страницу. Узнайте о наших услугах, продуктах, отзывах и часто задаваемых вопросах.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviews.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endpush

@section('content')
    @include('sections.hero')
    @include('sections.prices')
    @include('sections.products')
    @include('sections.reviews')
    @include('sections.faq')
@endsection
