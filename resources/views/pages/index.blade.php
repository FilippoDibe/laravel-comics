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
                                <button class="buy-button">BUY - {{ $comic['price'] }}</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
