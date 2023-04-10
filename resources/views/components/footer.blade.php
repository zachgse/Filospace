<div class="green-2 justify-content-center align-items-center text-white vh-50 p-5">
    <div class="d-flex">
        <div class="p-2">
            <br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.discover')}}">
                Products
            </a>
            <br><br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.creative')}}">
                Images
            </a>
            <br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.vector')}}">
                Vector
            </a>
            <br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.music')}}">
                Music
            </a>
            <br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.video')}}">
                Videos
            </a>
        </div>
        <div class="p-2 flex-grow-1">
            <br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.about')}}">
                Company
            </a>
            <br><br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('homepage.about')}}">
                About Us
            </a>
            <br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;"  href="{{route('homepage.about', ['#founders'])}}">
                The Team
            </a>
            <br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('welcome', ['#testimonial'])}}">
                Testimonials
            </a>
            <br><br>
            <a class="inter-semi-bold m-3" style="font-size:16px; text-decoration: none; color: white;" href="{{route('welcome', ['#trusted-by'])}}">
                Trusted by
            </a>
        </div>
        <div class="p-2">
            <a href="{{route('welcome')}}">
                <img src="{{asset('img/logo.png')}}" alt="Filospace Logo" class="img-fluid" style="float:right;">
            </a>
            <br><br><br>
            <p class="inter-regular text-right w-50 m-3" style="font-size:16px; float:right;">
                Have access various media assets that you won't find anywhere else. Our platform is user-friendly, easy to navigate, 
                and equipped with advanced search and filtering capabilities that allow you to quickly find the perfect asset for your project.
            </p>
        </div>
    </div>

    <br><br><br><br>    

    <footer>
        <img src="{{asset('img/footer-logo.png')}}" alt="Filospace Logo" class="img-fluid" width="48">
        <p class="inter-regular" style="font-size:16px;"></p>
        © 2023 Filospace. All Rights Reserved.
    </footer>
</div>