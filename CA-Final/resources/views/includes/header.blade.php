<header class="header">
    <div class="container">
        <nav class="nav">
            <div class="logo">
                <a href="{{ route('home') }}" class="logo-link">Smart Food Ingredients</a>
            </div>
                <div class="menu">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('recipes') }}" class="nav-link">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>

                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                    @endguest
                
                </ul>
        </nav>
    </div>
</header>

