@extends('layouts.main-layout')

@section('head')
    <title>{{ $comic['title'] }}</title>
@endsection

@section('content')
    <div class="container-main">
        <div class="comic-details">
            <div class="comic-image">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            </div>
            <div class="comic-info">
                <h2>{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
            </div>
        </div>
    </div>
@endsection
