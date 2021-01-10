@extends('layouts.master')

@section('content')

<div class="contact">
    <div class="left-side">
        <img src="{{ asset('img/casey-lee-awj7sRviVXo-unsplash.jpg') }}" alt="" srcset="">
    </div>
        <div class="right-side">               
            <div class="form-box">
               
                <h1 class="title">{{ __('Contact Us') }}</h1>

                    <form action="" method="POST" name="contact">
                        <div>                        
                            <input type="text" name="name" placeholder="Enter Name ..." value="{{ old('name') }}" autofocus>
                        </div>
                            <div>                        
                                <input type="email" name="email" placeholder="Enter Email ..." value="{{ old('email') }}">
                            </div>
                                <div>
                                    <textarea name="message" id="" cols="30" rows="5" placeholder="Write your message ...">{{ old('message') }}</textarea>
                                </div>
                                    <button class="contact-btn" type="submit" name="contact-submit">{{ ('Submit') }}</button>
                    </form>  
            </div>
        </div>
</div>

@endsection