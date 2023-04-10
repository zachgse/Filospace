<div class="text-center">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('img/logo.png')}}" alt="Filospace Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage.discover')}}">Discover</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homepage.about')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homepage.contact')}}">Contact Us</a>
                </li>
            </ul>
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item mt-2">
                        <div class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="cursor:pointer;'">Cart</div>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">
                            <button class="btn btn-outline">Login</button>
                        </a>
                    </li>
                    @endguest
                    @auth
                    <div class="dropdown nav-link mt-2" style="margin-right: 30px; cursor: pointer;">
                        <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{asset('img/icon-user.png')}}" class="mx-1" alt="User Icon"> {{auth()->user()->name}}
                        </p>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                    @endauth
                </ul>

            </div>
        </div>
    </nav>
</div>