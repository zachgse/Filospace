<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$page_title}}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/footer-logo.png')}}">
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <!-- custom css
    <link rel="stylesheet" href="{{asset('style.css')}}" /> -->
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            background-image: url("/images/hero.png");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .side-navbar {
            width: 250px;
            height: 100%;
            position: fixed;
            margin-left: -300px;
            background-color: #469F9F;
            transition: 0.5s;
        }

        .nav-link {
            cursor: pointer;
            text-decoration: none; 
            color: white;
        }

        .nav-link:active,
        .nav-link:focus,
        .nav-link:hover {
            background-color: #ffffff26;
            cursor: pointer;
            text-decoration: none; 
            color: white;
        }

        .my-container {
            transition: 0.4s;
        }

        .active-nav {
            margin-left: 0;
        }

        /* for main section */
        .active-cont {
            margin-left: 250px;
        }

        #menu-btn {
            background-color: #469F9F;
            color: #fff;
            margin-left: -62px;
        }

        .my-container input {
            border-radius: 2rem;
            padding: 2px 20px;
        }
    </style>

    <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
        <ul class="nav flex-column text-white w-100 mt-5">
            <a href="{{route('welcome')}}" class="nav-link h3 text-white my-2">
                <img src="{{asset('img/logo.png')}}" alt="Filospace logo" width="200">
            </a>
            <br>
            <!-- <li href="#" class="nav-link">
                <div class="dropdown">
                    <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bxs-dashboard'></i>
                        <span class="mx-2">Carousel</span>
                    </p>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">View homepage carousel</a></li>
                        <li><a class="dropdown-item" href="{{route('admin.create')}}">Add carousel</a></li>
                    </ul>
                </div>
            </li> -->
            <li>
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class='bx bxs-dashboard'></i>
                    <span class="mx-2">Admin</span>
                </a>
            </li>
            <br>
            <li href="#" class="nav-link">
                <div class="dropdown">
                    <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-package'></i>
                        <span class="mx-2">Products</span>
                    </p>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('product.index')}}">View products</a></li>
                        <li><a class="dropdown-item" href="{{route('product.create')}}">Add product</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{route('admin.inquiry-index')}}" class="nav-link">
                    <i class='bx bx-question-mark'></i>
                    <span class="mx-2">Inquiries</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="my-container active-cont">
        <nav class="navbar top-navbar navbar-light bg-light px-5" style="background-color:transparent !important;">
            <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
            <div class="dropdown nav-link" style="color:black;">
                <p class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('img/icon-user.png')}}" class="mx-1" alt="User Icon"> <span class="m-1">{{auth()->user()->name}}</span>
                </p>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var menu_btn = document.querySelector("#menu-btn");
        var sidebar = document.querySelector("#sidebar");
        var container = document.querySelector(".my-container");
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav");
            container.classList.toggle("active-cont");
        });
    </script>
</body>
</html>