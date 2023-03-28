<nav class="navbar navbar-expand-xxl bg-light py-3" id="mobile-nav"> 
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <i class="bi bi-bootstrap-fill h2 align-middle"></i>
            <img src="{{asset('images/logo.png')}}" alt="Filospace logo">
        </a>

        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerflex-1" aria-controls="navbarTogglerflex-1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars" style="color: white; font-size: 28px;"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse align-items-center" id="navbarTogglerflex-1">
            <ul class="navbar-nav">                               
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<div class="d-flex justify-content-between text-white mb-5" id="web-nav" style="background-color: transparent !important;">
    <div class="d-flex flex-inline">
        <div class="m-1">
            <a href="#section-3" class="links">
                <img src="{{asset('images/icon-about.png')}}" alt="About Us Icon"> ABOUT US
            </a>
        </div>

        <div class="m-1">
            <a href="#section-4" class="links">
                <img src="{{asset('images/icon-contact.png')}}" alt="Contact Icon"> CONTACT US
            </a>
        </div>		
    </div>

    <div>
        <a href="{{route('welcome')}}">
            <img src="{{URL::asset('images/logo.png')}}" alt="Filospace logo">
        </a>
    </div>

    <div class="d-flex flex-inline">
        <div class="m-1">
            @guest
            <a href="{{route('login')}}" class="links" style="margin-right: 30px;">
                <img src="{{asset('images/icon-user.png')}}" class="mx-2" alt="Login Icon">LOGIN
            </a>
            @endguest
            @auth
            <div class="dropdown links text-white" style="margin-right: 30px; cursor: pointer;">
                <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/icon-user.png')}}" class="mx-1" alt="User Icon"> {{auth()->user()->name}}
                </p>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
            @endauth
        </div>
        <div class="m-1">
            <img src="{{asset('images/icon-board.png')}}" alt="Board Icon"> BOARDS
        </div>
        <div class="m-1">
            <img src="{{asset('images/icon-cart.png')}}" alt="Cart Icon"> CART
        </div>
    </div>
</div>