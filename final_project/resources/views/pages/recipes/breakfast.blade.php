@extends('layouts.master')

@section('content')

<div class="breakfast-hero">
    <img src="{{ asset('img/ben-kolde-rQsYZnCRU00-unsplash.jpg') }}" alt="" srcset="">
        <div class="breakfast-hero-text">Breakfast<br>The most important <br>meal of the day</div>
</div>

<div class="container">
    <div class="recipe-container">
        @foreach($breakfasts as $breakfast)
            <div class="card">
                <div class="image">
                    <img src="{{ asset('storage/images/breakfast/'.$breakfast->image) }}" alt="{{ $breakfast->image }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $breakfast->name }}</h5>
                    <p class="card-text">{{ $breakfast->description }}</p>
                    <a href="#" class="link">{{ __('See recipe') }}</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection