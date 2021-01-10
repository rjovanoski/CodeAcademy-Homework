@extends('layouts.profile')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{ __('My Recipes') }}</h3>
                <div class="breakfast-box">
                    <h4 class="recipe-name">Soup</h4>
                    <small class="recipe-status">Pending</small>
                </div>
        </div>
    </div>
</div>
@endsection
