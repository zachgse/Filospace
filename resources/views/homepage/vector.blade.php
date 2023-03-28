<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$page_title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />

    <style>
        .btn-size {
            width: 295px;
            height: 79px;
        }

        .btn-outline-2, .btn-outline-2:hover {
            background-color: white;
            color: black;
        }

        .row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-fluid {
            width: 100%;
            height: 618px;
        }

        thead {
            background-color: #e1e1e1;
            border: solid 1px #e1e1e1 !important;
        }

        th {
            border: none !important;
        }

        tr {
            vertical-align: middle;
        }

        td {
            max-width:100px; 
            word-wrap:break-word;
        }

        .border {
            border: solid 2px white !important;
        }

        .parent {
            display: flex;
            flex-wrap: wrap;
        }

        .child {
            flex: 1 0 21%; /* explanation below */
            margin: 1px;
            width: auto;
            height: auto;
        }
        
    </style>

</head>
<body style="background-color:#717C73;">

<section>

    <nav class="navbar navbar-expand-xxl bg-light py-3 p-3" id="mobile-nav">
        <br>
        <div class="container-fluid">

            <a class="navbar-brand" href="{{route('welcome')}}">
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
                    <br><br>                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('welcome')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('welcome')}}">Contact Us</a>
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

    <div class="d-flex justify-content-between text-white container-fluid" id="web-nav" style="background-color: #717C73; height: 100px;">
        <div class="d-flex flex-inline mt-5">
            <div class="m-1">
                <a href="{{route('welcome')}}" class="links">
                    <img src="{{asset('images/icon-about.png')}}" alt="About Us Icon"> ABOUT US
                </a>
            </div>

            <div class="m-1">
                <a href="{{route('welcome')}}" class="links">
                    <img src="{{asset('images/icon-contact.png')}}" alt="Contact Icon"> CONTACT US
                </a>
            </div>		
        </div>

        <div class="mt-5">
            <a href="{{route('welcome')}}">
                <img src="{{asset('images/logo.png')}}" alt="Filospace logo">
            </a>
        </div>

        <div class="d-flex flex-inline mt-5">
            <div class="m-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" style="cursor:pointer;">
                <img src="{{asset('images/icon-cart.png')}}" alt="Cart Icon"> CART
            </div>
            <div class="m-1 ms-3">
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

    <br>

    <form class="input-group search-bar-2 mb-5 auto" method="POST" action="{{route('homepage.search')}}">
        @csrf
        <span class="input-group-text" id="basic-addon3">
            <div class="btn-group">
                <select name="tag" class="form-control btn-black">
                    <option value="" selected disabled hidden>Category</option>
                    <option value="Image">Images</option>
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

    <div class="container-fluid">
        <div class="card text-white w-100" style="background-color: #1D1F1D; min-height: 75vh;">
            <div class="card-body p-5">
                <h4>Result for Vector</h4>
                <hr>

                <div class="parent">
                    @forelse ($record as $value)
                    <div class="child card img-wrapper">
                        <a href="{{route('homepage.show', [$value->id])}}">
                            <img src="{{ asset("storage/product/{$value->filename}") }}" width="auto" class="img-fluid inner-img">
                        </a>
                    </div>
                    @empty
                    <p>No results found</p>
                    @endforelse
                </div>
            
            </div>
        </div>
        <br><br>
    </div>

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


</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>