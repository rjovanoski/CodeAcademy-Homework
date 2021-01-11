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
                        <div class="box-title">
                            <h5>{{ $breakfast->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $breakfast->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $breakfast->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $breakfast->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $breakfast->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $breakfast->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $bread->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $bread->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $bread->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $bread->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $burger->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $burger->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $burger->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $burger->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $burger->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                            <img src="{{ asset('storage/images/meat/'.$burger->image) }}" alt="{{ $meat->image }}">
                        </div>
                        <div class="box-title">
                            <h5>{{ $meat->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $meat->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $meat->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $meat->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $meat->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $pasta->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $pasta->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $pasta->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $pasta->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $pasta->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $pizza->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $pizza->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $pizza->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $pizza->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $pizza->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $soup->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $soup->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $soup->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $soup->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $soup->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $vegan->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $vegan->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $vegan->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $vegan->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $vegan->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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
                        <div class="box-title">
                            <h5>{{ $cake->name }}</h5>
                        </div>
                        <div class="box-body">
                            <div class="box-text">
                                <p>{{ __('Preparation time: ') }}<span>{{ $cake->preparation_time }} {{ __('minutes') }}</span></p>                                
                            </div>
                            <div class="box-text">
                                <p>{{ __('Ingredients: ') }}</p>
                                <span>{{ $cake->ingredients }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Preparation: ') }}</p>
                                <span>{{ $cake->preparation }}</span>
                            </div>
                            <div class="box-text">
                                <p>{{ __('Description: ') }}</p>
                                <span>{{ $cake->description }}</span>
                            </div>
                        </div>
                        <div class="box-footer">
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