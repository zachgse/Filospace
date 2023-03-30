@extends('layouts.main')

@section('content')
<section class="bg-image">

    <nav class="navbar navbar-expand-xxl bg-light py-3 p-3" id="mobile-nav">
        <br>
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <i class="bi bi-bootstrap-fill h2 align-middle"></i>
                <img src="images/logo.png" alt="Filospace logo">
            </a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerflex-1" aria-controls="navbarTogglerflex-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa fa-bars" style="color: white; font-size: 28px;"></i>
                </span>
            </button>

            <div class="collapse navbar-collapse align-items-center" id="navbarTogglerflex-1">
                <ul class="navbar-nav">        
                    <br><br>                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
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

    <br>

<div class="d-flex justify-content-between text-white container-fluid mb-3" id="web-nav">
    <div class="d-flex flex-inline">
        <div class="m-1 mt-4">
            <a href="#section-3" class="links">
                <img src="images/icon-about.png" alt="About Us Icon"> ABOUT US
            </a>
        </div>

        <div class="m-1 mt-4">
            <a href="#section-4" class="links">
                <img src="images/icon-contact.png" alt="Contact Icon"> CONTACT US
            </a>
        </div>		
    </div>

    <div>
        <a href="/">
            <img src="images/logo.png" alt="Filospace logo">
        </a>
    </div>

    <div class="d-flex flex-inline">
        <div class="m-1 mt-4" class="links" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="cursor:pointer;" id="cart">
            <img src="images/icon-cart.png" alt="Cart Icon"> CART
        </div>
        <div class="m-1 ms-3 mt-4">
            @guest
            <a href="{{route('login')}}" class="links" style="margin-right: 30px;">
                <img src="{{asset('images/icon-user.png')}}" class="mx-2" alt="Login Icon">LOGIN
            </a>
            @endguest
            @auth
            <a href="{{route('admin.index')}}" class="links m-1">
                <i class='bx bxs-dashboard' class="mx-2"></i> Dashboard
            </a>
            <a href="{{route('logout')}}" class="links m-1">
                <img src="{{asset('images/icon-user.png')}}" class="mx-2" alt="Login Icon">Logout
            </a>
            <!-- <div class="dropdown links text-white" style="margin-right: 30px; cursor: pointer;">
                <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('images/icon-user.png')}}" class="mx-1" alt="User Icon"> {{auth()->user()->name}}
                </p>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a></li>
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div> -->
            @endauth
        </div>
    </div>
</div>

    <br><br><br><br><br><br>

    <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 30rem;">
            <div class="card-header">
                Login
            </div>
            <div class="card-body">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button class="btn btn-outline pull-right" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection