<header>
    <div class="container">
        <nav class="nav">
            <div class="logo">
                <a href="{{ url('/') }}">{{ __('Smart Food Ingredients') }}</a>
            </div>
            <div class="menu" id="menu">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-list" id="navId">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">{{ __('Home') }}</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown-recipes">
                        <a class="dropdown-btn">{{ __('Recipes') }}</a>
                        <i class="fas fa-caret-down"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ route('recipes') }}" class="dropdown-link">{{ __('All Recipes') }}</a>
                        <a href="{{ route('breakfast') }}" class="dropdown-link">{{ __('Breakfast') }}</a>
                        <a href="{{ route('bread') }}" class="dropdown-link">{{ __('Bread') }}</a>
                        <a href="{{ route('burger') }}" class="dropdown-link">{{ __('Burger') }}</a>
                        <a href="{{ route('meat') }}" class="dropdown-link">{{ __('Meat') }}</a>
                        <a href="{{ route('pasta') }}" class="dropdown-link">{{ __('Pasta') }}</a>
                        <a href="{{ route('pizza') }}" class="dropdown-link">{{ __('Pizza') }}</a>
                        <a href="{{ route('soup') }}" class="dropdown-link">{{ __('Soup') }}</a>
                        <a href="{{ route('vegan') }}" class="dropdown-link">{{ __('Vegan') }}</a>
                        <a href="{{ route('cake') }}" class="dropdown-link">{{ __('Cake') }}</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link">{{ __('About') }}</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link">{{ __('Contact') }}</a>
                </li>
                @guest
                <li class="nav-item">
                    <div class="dropdown-user">
                        <i class="fas fa-user"></i>
                        <i class="fas fa-caret-down"></i>
                    </div>
                        <div class="user-links">
                            <a href="{{ route('login') }}" class="dropdown-link">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="dropdown-link">{{ __('Register') }}</a>
                            @endif
                        </div>
                </li>
                @else
                <li class="nav-item">
                    <div class="dropdown-user">
                        <a class="dropdown-btn">{{ Auth::user()->name }}</a>
                        <i class="fas fa-caret-down"></i>
                    </div>

                    <div class="user-links">
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ route('admin') }}" class="dropdown-link">{{ __('Admin') }}</a>
                        @else
                        <a href="{{ route('profile') }}" class="dropdown-link">{{ __('Profile') }}</a>
                        <a href="{{ route('userRecipes') }}" class="dropdown-link">{{ __('My Recipes') }}</a>
                        <a href="{{ route('create') }}" class="dropdown-link">{{ __('New Recipe') }}</a>
                        @endif
                        <a class="dropdown-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>