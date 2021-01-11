@extends('layouts.profile')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>{{ Auth::user()->name }}</h3>
                </div>
                <div class="avatar-container">
                    <img src="{{ asset('storage/images/user/'.Auth::id().'/'.Auth::user()->avatar) }}" alt="">
                </div>
                <div class="card-body">                   
                   <div class="recipes">
                        @foreach($recipes as $recipe)
                            <a href="{{ $recipe->id }}">{{ $recipe->name }}</a>
                        @endforeach
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
