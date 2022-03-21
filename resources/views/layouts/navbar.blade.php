<div class="navbar-container">
    <div class="navbar-content">
        <div class="navbar-left">
            <a href="{{route('home')}}"><img class="logo" src="{{asset('images/logo.png')}}" alt="logo"></a>
        </div>
        <div class="navbar-middle">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About Us</a>
            <a href="{{route('product')}}">Products</a>
            <a href="{{route('contact')}}">Contact Us</a>
            @if (Auth::check())
            <a href="{{route('member')}}">Dashboard</a>
            @endif
        </div>
        <div class="navbar-right">
            @if (Auth::check())
            <div class="navbar-register">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit()">
                                Logout
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            @else
            <div class="navbar-register">
                <div class="nav-item">
                    <a class="nav-link" href="{{route('registration')}}">Register</a>
                </div>
            </div>
            <div class="navbar-register">
                <div class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
