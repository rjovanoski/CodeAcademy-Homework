@extends('layouts.master')

@section('content')

<div class="soup-hero">
    <img src="{{ asset('img/louis-hansel-shotsoflouis-tp3M3GCbssQ-unsplash.jpg') }}" alt="" srcset="">
        <div class="soup-hero-text">{{ __('SOUP') }}<br>{{ __('Delicious compilation') }}<br>{{ __('of flavors') }}</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($soups as $soup)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/soup/'.$soup->image) }}" alt="{{ $soup->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $soup->name }}</h5>
                    <p class="card-text">{{ $soup->description }}</p>
                    <a href="#" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection