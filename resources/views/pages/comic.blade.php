@extends('layouts.main-layout')

@section('head')
    <title>{{ $comic['title'] }}</title>
@endsection

@section('content')
    <div class="blue-row">
        <img src="{{ $comic['thumb'] }}" class="img-comic" alt="{{ $comic['title'] }}">
    </div>
    <div class="info-container">
        <div class="info-info">
            <h1>{{ $comic['title'] }}</h1>
            <div class="green-botton">
                <div class="price">
                    <span>
                        U.S Price {{ $comic['price'] }}
                    </span>
                    <span class="stato">AVAIABLE</span>
                </div>
                <div class="check-avaiable">
                    Check avaiable ^
                </div>
            </div>
            <p class="description">{{ $comic['description'] }}</p>
        </div>
        <div class="publicita">
            {{-- il blocco con l'immagine con il codice sconto  --}}
        </div>
    </div>
    <div class="spec-container">
        <h2>talent</h2>
        <h2>specs</h2>
    </div>
@endsection
