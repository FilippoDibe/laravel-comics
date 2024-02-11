@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <div class="container-main">
        <div class="current-series">
            <div class="container-items">
                @foreach ($comics as $comic)
                    <div class="item">
                        <img src="{{ $comic['thumb'] }}"alt="{{ $comic['series'] }}" class="item-thumb">
                        <div class="item-info">
                            <h5>{{ $comic['series'] }}</h5>
                            <h6>{{ $comic['type'] }}</h6>
                            <a href="{{ url('/comic/' . urlencode($comic['title'])) }}">
                                <button class="buy-button">INFO</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="middle-blue-bar">
        <div class="content-container">
            <a href="#" class="blue-bar-item">
                <img src="/img/buy-comics-digital-comics.png" alt="Digital Comics" class="blue-bar-icon"> DIGITAL COMICS
            </a>
            <a href="#" class="blue-bar-item">
                <img src="/img/buy-comics-merchandise.png" alt="DC Merchandise" class="blue-bar-icon"> DC MERCHANDISE
            </a>
            <a href="#" class="blue-bar-item">
                <img src="/img/buy-comics-subscriptions.png" alt="Subscription" class="blue-bar-icon"> SUBSCRIPTION
            </a>
            <a href="#" class="blue-bar-item">
                <img src="/img/buy-comics-shop-locator.png" alt="Comic Shop Locator" class="blue-bar-icon"> COMIC SHOP
                LOCATOR
            </a>
            <a href="#" class="blue-bar-item">
                <img src="/img/buy-dc-power-visa.svg" alt="DC Power Visa" class="blue-bar-icon"> DC POWER VISA
            </a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
