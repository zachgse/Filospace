@extends('layouts.main')

@section('content')
    <section class="d-flex flex-column">
        @include('components.navbar')
        <div class="text-center">
            <p class="inter-semi-bold mt-5" style="font-size: 52px; letter-spacing: 0.5px;">
                Authentic Filipino content for <br>your creative needs
            </p>
        </div>

        <div class="text-center">
            <p class="inter-regular" style="font-size: 26px; letter-spacing: -0.1px; color:#5F6D7E;">
                For marketers who are looking for impactful creative assets, Filospace provides access to 
                authentic Filipino <br> content that is consistently reliable.
            </p>
        </div>

        <div class="mt-auto text-center">
            <img src="{{asset('img/hero.png')}}" alt="" class="img-fluid">
        </div>
    </section>

    <section class="gray">
        <div class="text-center">
            <p class="inter-semi-bold" style="font-size: 32px; letter-spacing: -0.1px; color:#272D37;">
                Explore the best of royalty-free
            </p>
        </div>
        <br><br><br>
        <div class="container">
            <div class="d-flex justify-content-evenly">
                <div class="inner-img m-3">
                    <a href="{{route('homepage.creative')}}" class="homepage-link">
                        <img src="{{asset('img/section-2-img-1.png')}}" alt="Images Icon" class="img-fluid" width="275" height="275">
                        <p class="inter-semi-bold text-center mt-3" style="font-size:25px;">Images</p>
                    </a>
                </div>
                <div class="inner-img m-3">
                    <a href="{{route('homepage.vector')}}" class="homepage-link">
                        <img src="{{asset('img/section-2-img-2.png')}}" alt="Vector Icon" class="img-fluid" width="275" height="275">
                        <p class="inter-semi-bold text-center mt-3" style="font-size:25px;">Vector</p>
                    </a>
                </div>
                <div class="inner-img m-3">
                    <a href="{{route('homepage.music')}}" class="homepage-link">
                        <img src="{{asset('img/section-2-img-3.png')}}" alt="Music Icon" class="img-fluid" width="275" height="275">
                        <p class="inter-semi-bold text-center mt-3" style="font-size:25px;">Music</p>
                    </a>
                </div>
                <div class="inner-img m-3">
                    <a href="{{route('homepage.video')}}" class="homepage-link">
                        <img src="{{asset('img/section-2-img-4.gif')}}" alt="Videos Icon" class="img-fluid gif"> 
                        <p class="inter-semi-bold text-center mt-3" style="font-size:25px;">Videos</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="d-flex justify-content-evenly align-items-center p-5">
        <div>
            <p class="inter-semi-bold" style="font-size: 32px; letter-spacing: -0.1px; color:#272D37;">
                We make it easy to make an impact
            </p>
            <br>
            <p class="inter-regular" style="font-size: 24px; letter-spacing: -0.1px; color:#5F6D7E;">
                Reach your customers more effectively with Filospace designed to help your team:
            </p>
            <br>
            <p class="inter-regular" style="font-size: 24px; letter-spacing: -0.1px; color:#5F6D7E;">
                <span><img src="img/check.png" alt=""></span>
                Find compelling, high‑quality content to use worry‑free
            </p>
            <p class="inter-regular" style="font-size: 24px; letter-spacing: -0.1px; color:#5F6D7E;">
                <span><img src="img/check.png" alt=""></span>
                Create custom imagery that’s on‑brand and on‑budget
            </p>
            <p class="inter-regular" style="font-size: 24px; letter-spacing: -0.1px; color:#5F6D7E;">
                <span><img src="img/check.png" alt=""></span>
                Connect with your audience more authentically
            </p>
            <br>
            <a href="{{route('homepage.discover')}}">
                <button class="btn btn-outline mt-3">Explore now <span><img src="img/arrow.png"/></span></button>
            </a>
        </div>
        <div  style="background-color: transparent;">
            <img src="img/section-3-gif.gif" alt="GIF" class="img-fluid" width="561" height="658">
        </div>
    </section>

    <section class="d-flex flex-column align-items-center p-5">
        <div>
            <p class="inter-semi-bold" style="font-size: 32px; letter-spacing: -0.1px; color:#272D37;">
                Together, we can solve your content needs
            </p>
        </div>
        <br><br><br>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card border-0 m-3 p-2" style="width: 24rem;">
                    <img src="img/section-4-img-1.png" class="card-img-top img-fluid" alt="Exceptional images, video, and music" style="width:375px; height:289px;">
                    <div class="card-body">
                        <p class="inter-semi-bold" style="font-size: 20px; letter-spacing: -0.1px; color:#5F6D7E;">
                            Exceptional images, video, and music
                        </p>
                        <p class="inter-regular" style="font-size: 16px; letter-spacing: -0.1px; color:#5F6D7E;">
                            Get access to our library of millions of authentic, high‑quality photos, illustrations, vectors, videos, and more 
                            that reflect our commitment to showcase Philippine-centered content
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 m-3 p-2" style="width: 24rem;">
                    <img src="img/section-4-img-2.png" class="card-img-top img-fluid" alt="Simplified workflow & licensing" style="width:375px; height:289px;">
                    <div class="card-body">
                        <p class="inter-semi-bold" style="font-size: 20px; letter-spacing: -0.1px; color:#5F6D7E;">
                            Simplified workflow & licensing
                        </p>
                        <p class="inter-regular" style="font-size: 16px; letter-spacing: -0.1px; color:#5F6D7E;">
                            Empower your staff with collaboration tools, digital asset management, and the peace of mind that comes with
                             industry‑leading protection and usage rights.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 m-3 p-2" style="width: 24rem;">
                    <img src="img/section-4-img-3.png" class="card-img-top img-fluid" alt="Exceptional images, video, and music" style="width:375px; height:289px;">
                    <div class="card-body">
                        <p class="inter-semi-bold" style="font-size: 20px; letter-spacing: -0.1px; color:#5F6D7E;">
                            Reach customers organically
                        </p>
                        <p class="inter-regular" style="font-size: 16px; letter-spacing: -0.1px; color:#5F6D7E;">
                            Discover native advertising like you've never seen before. Filospace is a new platform with massive scale that 
                            enables you to reach relevant consumers authentically.
                        </p>
                    </div>
                </div>
            </div>            
        </div>
        <br><br><br>
        <div class="mt-auto" id="trusted-by">
            <p class="inter-semi-bold" style="font-size: 32px; letter-spacing: -0.1px; color:#515C72;">
                Trusted by the world’s leading enterprises and brands
            </p>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-2">
                <img src="img/lazada.png" alt="Lazada" class="img-fluid m-5">
            </div>
            <div class="col-lg-2">
                <img src="img/beauty.png" alt="Beauty Mnl" class="img-fluid m-5">
            </div>
            <div class="col-lg-2">
                <img src="img/zalora.png" alt="Zalora" class="img-fluid m-5">
            </div>
            <div class="col-lg-2">
                <img src="img/carousel.png" alt="Carousell" class="img-fluid m-5">
            </div>
            <div class="col-lg-2">
                <img src="img/shopee.png" alt="Shopee" class="img-fluid m-5">
            </div>
        </div>
    </section>

    <div class="green d-flex flex-column justify-content-center align-items-center vh-50 p-5" id="testimonial">
        <div class="text-center">
            <p class="inter-semi-bold text-white" style="font-size: 32px; letter-spacing: -0.1px;">
                Testimonials
            </p>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-center border-0 m-5" style="width: 20rem; background-color:transparent;">
                    <img src="img/star.png" class="card-img-top img-fluid auto" alt="Star Rating" style="width:100px; height:18px;">
                    <div class="card-body">
                        <p class="inter-regular text-white" style="font-size: 16px; letter-spacing: -0.1px;">
                            <i>
                                The app's extensive library of visually striking photos has made it an indispensable resource for our marketing campaigns. It's a must-have for any marketing officer.
                            </i>
                        </p>
                    </div>
                    <br><br>
                    <div class="card-footer border-0" style="background-color: transparent;">
                        <img src="img/section-5-img-1.png" class="img-fluid auto" alt="Testimonial 1" style="width:60px; height:60px;">
                        <p class="inter-regular text-white mt-3" style="font-size: 16px; letter-spacing: -0.1px;">
                            <b>Carlos Garcia</b>
                            <br>
                            Katipunan, Quezon City
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center border-0 m-5" style="width: 20rem; background-color:transparent;">
                    <img src="img/star.png" class="card-img-top img-fluid auto" alt="Star Rating" style="width:100px; height:18px;">
                    <div class="card-body">
                        <p class="inter-regular text-white" style="font-size: 16px; letter-spacing: -0.1px;">
                            <i>
                                As a marketing officer, I've found that using this app has drastically improved our brand's image quality and 
                                engagement on social media. It's a powerful tool that every marketing professional should have in their arsenal.
                            </i>
                        </p>
                    </div>
                    <div class="card-footer border-0" style="background-color: transparent;">
                        <img src="img/section-5-img-2.png" class="img-fluid auto" alt="Testimonial 1" style="width:60px; height:60px;">
                        <p class="inter-regular text-white mt-3" style="font-size: 16px; letter-spacing: -0.1px;">
                            <b>Gabriela Cruz</b>
                            <br>
                            Fort Bonifacio, Taguig
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center border-0 m-5" style="width: 20rem; background-color:transparent;">
                    <img src="img/star.png" class="card-img-top img-fluid auto" alt="Star Rating" style="width:100px; height:18px;">
                    <div class="card-body">
                        <p class="inter-regular text-white" style="font-size: 16px; letter-spacing: -0.1px;">
                            <i>
                                I'm an ad maker and have been using this app for a while now. The high-quality images and user-friendly interface 
                                make it my go-to for all my visual needs.”
                            </i>
                        </p>
                    </div>
                    <br>
                    <div class="card-footer border-0 mt-2" style="background-color: transparent;"></div>
                        <img src="img/section-5-img-3.png" class="img-fluid auto" alt="Testimonial 1" style="width:60px; height:60px;">
                        <p class="inter-regular text-white mt-3" style="font-size: 16px; letter-spacing: -0.1px;">
                            <b>Luigi Torres</b>
                            <br>
                            Sta. Rosa, Laguna
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection