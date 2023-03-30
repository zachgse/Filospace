<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filospace</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/icon.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

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
                            <a class="nav-link" href="#section-3">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section-4">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="cursor:pointer;">Cart</a>
                        </li>
                        <li class="nav-item">
                            @guest
                            <a href="{{route('login')}}" class="nav-link">
                                Login
                            </a>
                            @endguest
                            @auth
                            <a href="{{route('admin.index')}}" class="nav-link">
                                Dashboard
                            </a>
                            <a href="{{route('logout')}}" class="nav-link">
                                Logout
                            </a>
                            <!-- <div class="dropdown nav-item text-white" style="cursor: pointer;">
                                <p class="dropdown-toggle text-center nav-link" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{auth()->user()->name}}
                                </p>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a></li>
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                                </ul>
                            </div> -->
                            @endauth
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

        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex justify-content-evenly mb-5">
            
            <div class="p-2 text-white">
                <a href="{{route('homepage.creative')}}" class="links">IMAGE</a>   
            </div>
            <div class="p-2 text-white">
                <a href="{{route('homepage.video')}}" class="links">VIDEO</a>   
            </div>
            <div class="p-2 text-white">
                <a href="{{route('homepage.music')}}" class="links">MUSIC</a>   
            </div>
            <div class="p-2 text-white">
                <a href="{{route('homepage.vector')}}" class="links">VECTOR</a>   
            </div>

        </nav>

        <div>
            <p class="text-white text-center" style="font-size:28px; letter-spacing: 0.5px;">Authentic Filipino content for your creative needs</p>
        </div>

        <div>
            <form class="input-group search-bar mb-3 auto" method="POST" action="{{route('homepage.search')}}">  
                @csrf
                <span class="input-group-text" id="basic-addon1" style="margin-right: -5px;">
                    <button style="border: none; background-color: transparent;">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                <input type="text" class="form-control search-bar-input" name="keyword" placeholder="Search the Philippines' best creative photos and images">
                <span class="input-group-text" id="basic-addon2" style="margin-left: -5px;">
                    <div class="btn-group">
                    <select name="tag" class="btn-white">
                        <option value="" selected disabled hidden>Category</option>
                        <option value="Image">Images</option>
                        <option value="Video">Video</option>
                        <option value="Music">Music</option>
                        <option value="Vector">Vector</option>
                    </select>
                    </div>
                </span>
            </form>
        </div>

        <p class="bottom-text">Scroll to explore</p>
    </section>

    <section id="section-2">
        <br><br>
        <form class="input-group search-bar-2 mb-5 auto" method="POST" action="{{route('homepage.search')}}">
            @csrf
            <span class="input-group-text" id="basic-addon3">
                <div class="btn-group">
                    <select name="tag" class="form-control btn-black">
                        <option value="" selected disabled hidden>Category</option>
                        <option value="Image">Image</option>
                        <option value="Video">Video</option>
                        <option value="Music">Music</option>
                        <option value="Vector">Vector</option>
                    </select>
                </div>
            </span>
            <button style="border: none; background-color: transparent;">
                <i class="fa fa-search text-white"></i>
            </button>
            <input type="text" class="form-control search-bar-input-2 text-white" placeholder="Start searching now" name="keyword">
        </form>

        @if($images->isEmpty())
        <div class="card-group">
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
        </div>
        @else
        <div class="card-group">
            @foreach($images as $image)
            <div class="card img-wrapper">
                <a href="{{route('homepage.show', [$image->id])}}"  target="_blank" style="width: 100%; height: 100%;">
                    <img src="storage/product/{{$image->filename}}" class="inner-img" alt="{{$image->title}} Image" style="width: 100%; height: 100%;">
                </a>
            </div>
            @endforeach
        </div>
        @endif

        @if($videos->isEmpty())
        <div class="card-group">
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
        </div>
        @else
        <div class="card-group">
            @foreach($videos as $video)
            <div class="card">
                <a href="{{route('homepage.show', [$video->id])}}" target="_blank" style="width: 100%; height: 100%;">
                    <video width=100% height=100% controls>
                        <source src="storage/product/{{$video->filename}}" type="video/mp4">
                        <source src="storage/product/{{$video->filename}}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </a>
            </div>
            @endforeach
        </div>
        @endif

        @if($vectors->isEmpty())
        <div class="card-group">
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
            <div class="card img-wrapper">
                <img src="images/sample-img.png" alt="" width="auto" class="img-fluid inner-img">
            </div>
        </div>
        @else
        <div class="card-group">
            @foreach($vectors as $vector)
            <div class="card img-wrapper">
                <a href="{{route('homepage.show', [$vector->id])}}"  target="_blank" style="width: 100%; height: 100%;">
                    <img src="storage/product/{{$vector->filename}}" class="inner-img" alt="{{$vector->title}} Image" style="width: 100%; height: 100%;">
                </a>
            </div>
            @endforeach
        </div>
        @endif

    </section>

    <section id="section-3">
        <br><br><br>
        <h3 class="text-white text-center letter-space my-5">ABOUT US</h3>
        <br><br><br><br>
        <div id="carouselExample" class="carousel slide ">
            <div class="carousel-inner">
                @forelse ($carousel as $dashboard)
                    <?php
                        $count++;
                    ?>
                    <div class="carousel-item @if($count == '1') active @endif">
                        <img src="storage/carousel/{{$dashboard->filename}}" class="d-block img-fluid" alt="{{$dashboard->title}}" 
                        style="width: 1416px; height: 415px; margin: auto;">
                    </div>
                @empty 
                    <div class="carousel-item active">
                        <img src="{{asset('images/sample-img.png')}}" class="d-block img-fluid" alt="..." 
                        style="width: 1416px; height: 415px; margin: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/sample-img.png')}}" class="d-block img-fluid" alt="..." 
                        style="width: 1416px; height: 415px; margin: auto;">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('images/sample-img.png')}}" class="d-block img-fluid" alt="..." 
                        style="width: 1416px; height: 415px; margin: auto;">
                    </div>
                @endforelse
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="d-flex justify-content-evenly text-justify mb-3">
            <div class="p-2 m-5">
                <div class="card text-white" style="width: 32rem; background-color: transparent; border: none;">
                    <div class="card-body">
                        <h4 class="text-center" style="font-size: 32px; font-weight:bold;">Our Mission</h4>
                        <br>
                        <p class="card-text" style="font-size: 20px;">
                            Our mission is to provide high-quality and diverse visual and audio content that empowers creatives, businesses, 
                            and individuals to bring their ideas to life. We strive to offer a rich collection of stock photos, videos, vectors, 
                            and sounds that reflect the beauty and uniqueness of the Philippines while catering to the global market's needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-2 m-5">
                <div class="card text-white" style="width: 32rem; background-color: transparent; border: none;">
                    <div class="card-body">
                        <h4 class="text-center" style="font-size: 32px; font-weight:bold;">Our Vision</h4>
                        <br>
                        <p class="card-text" style="font-size: 20px;">
                            Our vision is to become the leading stock media platform in the Philippines, offering exceptional and affordable stock media 
                            content to a broad range of users. We aim to create a community of photographers, videographers, sound engineers, and artists 
                            who share our passion for capturing the essence of the Philippines and providing excellent service to our clients.
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-2 m-5">
                <div class="card text-white" style="width: 32rem; background-color: transparent; border: none;">
                    <div class="card-body">
                        <h4 class="text-center" style="font-size: 32px; font-weight:bold;">Our Values</h4>
                        <br>
                        <p class="card-text" style="font-size: 20px;">
                            At FILOSPACE, we value creativity, diversity, quality, and affordability. We strive to foster a culture of continuous 
                            learning and improvement and are committed to providing exceptional customer service. We believe in supporting our 
                            local community of artists and creators and are dedicated to creating an inclusive and equitable work environment. 
                            Our values guide our actions and decisions as we continue to grow and evolve as a company.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>
    </section>

    <section class="bg-image-2 d-flex justify-content-center align-items-center" id="section-4">

        <div class="card contact-form auto p-5">
            <div class="card-body text-center">
                <h5 class="card-title text-white letter-space" style="font-size: 27px; font-weight: 600 !important;">CONTACT US</h5>
                <br><br><br>
                @include('layouts.notifications')
                <form action="{{route('homepage.inquiry')}}" method="POST">
                    @csrf
                    <input type="text" class="form-control contact-us-input mb-5" placeholder="Name" name="name">
                    <input type="email" class="form-control contact-us-input mb-5" placeholder="Email" name="email">
                    <textarea rows="7" cols="50" placeholder="Write something..."  class="form-control contact-us-textarea mb-5" name="description"></textarea>
                    <button class="btn btn-success" style="color:white; width: 160px; height:64px;">Submit</button>
                </form>
            </div>
        </div>

        <div class="contact-us-icons text-white" id="web-icon">
            <div class="m-3 my-5">
                <a href="https://www.instagram.com/filospace/" target="_blank">
                    <i class='bx bxl-instagram contact-us-icon'></i>
                </a>
            </div>
            <div class="m-3 my-5">
                <a href="https://www.facebook.com/filospace" target="_blank">
                    <i class='bx bxl-facebook-circle contact-us-icon' ></i>
                </a>
            </div>
            <div class="m-3 my-5">
                <a href="mailto:officialfilospace@gmail.com" target="_blank">
                    <i class='bx bx-mail-send contact-us-icon' ></i>
                </a>
            </div>
        </div>





    </section>

    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Cart</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody class="text-white">
                    <tr>
                        @forelse($cart as $index => $value)
                        <tr>
                            <td>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </td>

                            <td>
                                <div class="mb5">{{ $value->product->title }}</div>
                            </td>

                            <td>
                                <div class="mb5">{{ $value->product->category }}</div>
                            </td>


                            <td>
                                <div class="mb5">{{$value->product->price}}</div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <p class="text-center">No items in cart yet.</p>
                            </td>
                        </tr>
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>