<div class="footer">
    <div class="container">
        <div class="footer-logo">
            <h3>{{ __('Smart Food Ingredients') }}</h3>
            <p>{{ __("Need something new, healthy and delicious? This is the place where you can find the best recipes for your cuisine, prepare them and share something new.
                Join us and don't forget to cook with love.") }}</p>
        </div>
            <div class="pages">
                <ul class="main-pages">
                    <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                    <li><a href="{{ route('recipes') }}">{{ __('Recipes') }}</a></li>
                    <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                    <li><a href="{{ route('contact') }}">{{ __('Contact') }}</a></li>
                </ul>
                    <ul class="usefull-pages">
                        <li><a href="{{ route('breakfast') }}">{{ __('Breakfast') }}</a></li>
                        <li><a href="{{ route('burger') }}">{{ __('Burger') }}</a></li>
                        <li><a href="{{ route('meat') }}">{{ __('Meat') }}</a></li>              
                        <li><a href="{{ route('pizza') }}">{{ __('Pizza') }}</a></li>
                        <li><a href="{{ route('cake') }}">{{ __('Cake') }}</a></li>
                    </ul>
            </div>
    </div>
        <div>
            <div class="media-links">
                <a href="https://www.facebook.com/radoslav.jovanoski/"><i class="fab fa-facebook"></i></a>
                <a href="https://github.com/rjovanoski"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/radoslav_j.85/"><i class="fab fa-instagram"></i></a>
            </div>
                <div class="credentials">
                    <small class="copyrights">{{ __('Copyright') }} &#169; {{ __('2021 Smart Food Ingredients') }}</small>   
                </div> 
        </div>
</div>