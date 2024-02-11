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
                    <div class="line"></div>
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
    <div class="feature-bar">
        <div class="feature-container">
            <a href="#" class="feature-item">
                <img src="/img/buy-comics-digital-comics.png" alt="Digital Comics" class="feature-icon"> DIGITAL COMICS
            </a>
            <a href="#" class="feature-item">
                <img src="/img/buy-comics-merchandise.png" alt="DC Merchandise" class="feature-icon"> MERCHANDISE
            </a>
            <a href="#" class="feature-item">
                <img src="/img/buy-comics-subscriptions.png" alt="Subscription" class="feature-icon"> SUBSCRIPTION
            </a>
            <a href="#" class="feature-item">
                <img src="/img/buy-comics-shop-locator.png" alt="Comic Shop Locator" class="feature-icon"> SHOP LOCATOR
            </a>
            <a href="#" class="feature-item">
                <img src="/img/buy-dc-power-visa.svg" alt="DC Power Visa" class="feature-icon"> POWER VISA
            </a>
        </div>
    </div>
@endsection
