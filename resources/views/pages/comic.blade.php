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
    <div class="container">
        <div class="details-container">
            <div class="talent">
                <h3>Talent</h3>
                <div class="block">
                    <div class="line"></div>

                    <span class="title">Art by:</span>
                    @foreach ($comic['artists'] as $artist)
                        <span class="names">{{ $artist }}</span>
                    @endforeach
                </div>

                <div class="block" id="written">
                    <div class="line"></div>
                    <span class="title">Written by:</span>
                    @foreach ($comic['writers'] as $writer)
                        <span class="names">{{ $writer }}</span>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="details-container">
            <div class="specs">
                <h3>Specs</h3>
                <div class="line"></div>
                <div class="block-spec">
                    <div class="title">Series:</div>
                    <div class="specs-info">{{ $comic['series'] }}</div>
                </div>
                <div class="line"></div>
                <div class="block-spec">
                    <div class="title">U.S. Price:</div>
                    <div>{{ $comic['price'] }}</div>
                </div>
                <div class="line"></div>
                <div class="block-spec" id="last-spec">
                    <div class="title">On Sale Date:</div>
                    <div>{{ \Carbon\Carbon::parse($comic['sale_date'])->format('M d Y') }}</div>
                </div>
                <div class="line"></div>




            </div>
        </div>
    </div>
@endsection
