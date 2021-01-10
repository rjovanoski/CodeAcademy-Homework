@extends('layouts.profile')

@section('content')

<div class="container">    
    <section class="breakfast">
        @if($breakfasts->count() > 0)  
        <h2>{{ __('Breakfast Recipes') }}</h2>          
            <div class="recipe-container">                
                @foreach($breakfasts as $breakfast)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/breakfast/'.$breakfast->image) }}" alt="{{ $breakfast->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $breakfast->name }}</h5>
                            <p class="box-text">{{ $breakfast->preparation_time }}</p>
                            <p class="box-text">{{ $breakfast->ingredients }}</p>
                            <p class="box-text">{{ $breakfast->preparation }}</p>
                            <p class="box-text">{{ $breakfast->description }}</p>
                            <a href="{{ route('edit',$breakfast->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$breakfast->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Breakfast Recipes') }}</h2>
        @endif
    </section>
    <section class="bread"> 
        @if($breads->count() > 0)        
        <h2>{{ __('Bread Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($breads as $bread)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/bread/'.$bread->image) }}" alt="{{ $bread->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $bread->name }}</h5>
                            <p class="box-text">{{ $bread->preparation_time }}</p>
                            <p class="box-text">{{ $bread->ingredients }}</p>
                            <p class="box-text">{{ $bread->preparation }}</p>
                            <p class="box-text">{{ $bread->description }}</p>
                            <a href="{{ route('edit',$bread->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$bread->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Bread Recipes') }}</h2>
        @endif
    </section>
    <section class="burger"> 
        @if($burgers->count() > 0)        
        <h2>{{ __('Burger Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($burgers as $burger)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/burger/'.$burger->image) }}" alt="{{ $burger->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $burger->name }}</h5>
                            <p class="box-text">{{ $burger->preparation_time }}</p>
                            <p class="box-text">{{ $burger->ingredients }}</p>
                            <p class="box-text">{{ $burger->preparation }}</p>
                            <p class="box-text">{{ $burger->description }}</p>
                            <a href="{{ route('edit',$burger->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$burger->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Burger Recipes') }}</h2>
        @endif
    </section>
    <section class="meat"> 
        @if($meats->count() > 0)        
        <h2>{{ __('Meat Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($meats as $meat)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/meat/'.$meat->image) }}" alt="{{ $meat->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $meat->name }}</h5>
                            <p class="box-text">{{ $meat->preparation_time }}</p>
                            <p class="box-text">{{ $meat->ingredients }}</p>
                            <p class="box-text">{{ $meat->preparation }}</p>
                            <p class="box-text">{{ $meat->description }}</p>
                            <a href="{{ route('edit',$meat->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$meat->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Meat Recipes') }}</h2>
        @endif
    </section>
    <section class="pasta"> 
        @if($pastas->count() > 0)        
        <h2>{{ __('Pasta Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($pastas as $pasta)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/pasta/'.$pasta->image) }}" alt="{{ $pasta->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $pasta->name }}</h5>
                            <p class="box-text">{{ $pasta->preparation_time }}</p>
                            <p class="box-text">{{ $pasta->ingredients }}</p>
                            <p class="box-text">{{ $pasta->preparation }}</p>
                            <p class="box-text">{{ $pasta->description }}</p>
                            <a href="{{ route('edit',$pasta->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$pasta->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Pasta Recipes') }}</h2>
        @endif
    </section>
    <section class="pizza"> 
        @if($pizzas->count() > 0)        
        <h2>{{ __('Pizza Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($pizzas as $pizza)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/pizza/'.$pizza->image) }}" alt="{{ $pizza->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $pizza->name }}</h5>
                            <p class="box-text">{{ $pizza->preparation_time }}</p>
                            <p class="box-text">{{ $pizza->ingredients }}</p>
                            <p class="box-text">{{ $pizza->preparation }}</p>
                            <p class="box-text">{{ $pizza->description }}</p>
                            <a href="{{ route('edit',$pizza->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$pizza->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Pizza Recipes') }}</h2>
        @endif
    </section>
    <section class="soup"> 
        @if($soups->count() > 0)        
        <h2>{{ __('Soup Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($soups as $soup)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/soup/'.$soup->image) }}" alt="{{ $soup->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $soup->name }}</h5>
                            <p class="box-text">{{ $soup->preparation_time }}</p>
                            <p class="box-text">{{ $soup->ingredients }}</p>
                            <p class="box-text">{{ $soup->preparation }}</p>
                            <p class="box-text">{{ $soup->description }}</p>
                            <a href="{{ route('edit',$soup->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$soup->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Soup Recipes') }}</h2>
        @endif
    </section>
    <section class="vegan"> 
        @if($vegans->count() > 0)        
        <h2>{{ __('Vegan Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($vegans as $vegan)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/vegan/'.$vegan->image) }}" alt="{{ $vegan->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $vegan->name }}</h5>
                            <p class="box-text">{{ $vegan->preparation_time }}</p>
                            <p class="box-text">{{ $vegan->ingredients }}</p>
                            <p class="box-text">{{ $vegan->preparation }}</p>
                            <p class="box-text">{{ $vegan->description }}</p>
                            <a href="{{ route('edit',$vegan->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$vegan->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Vegan Recipes') }}</h2>
        @endif
    </section>
    <section class="cake">
        @if($cakes->count() > 0)        
        <h2>{{ __('Cake Recipes') }}</h2>
            <div class="recipe-container">
                @foreach($cakes as $cake)
                    <div class="box">
                        <div class="image">
                            <img src="{{ asset('storage/images/cake/'.$cake->image) }}" alt="{{ $cake->image }}">
                        </div>
                        <div class="box-body">
                            <h5 class="box-title">{{ $cake->name }}</h5>
                            <p class="box-text">{{ $cake->preparation_time }}</p>
                            <p class="box-text">{{ $cake->ingredients }}</p>
                            <p class="box-text">{{ $cake->preparation }}</p>
                            <p class="box-text">{{ $cake->description }}</p>
                            <a href="{{ route('edit',$cake->id) }}" class="btn btn-primary">{{ __('Update') }}</a>
                            <a href="{{ route('delete',$cake->id) }}" class="btn btn-danger">{{ __('Delete') }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h2>{{ __('No Bread Recipes') }}</h2>
        @endif
    </section>
</div>

@endsection