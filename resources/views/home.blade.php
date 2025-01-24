@extends('layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hero.css') }}">
    <link rel="stylesheet" href="{{ asset('css/prices.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products_view.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reviews.css') }}">
    <link rel="stylesheet" href="{{ asset('css/qna.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
@endpush

@section('content')
    @include('sections.header')
    @include('sections.hero')
    @include('sections.prices')
    @include('sections.products_view')
    @include('sections.reviews')
    @include('sections.qna')
    @include('sections.footer')
@endsection
