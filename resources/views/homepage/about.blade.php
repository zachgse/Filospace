@extends('layouts.main')

@section('content')
    <section class="d-flex flex-column">
        @include('components.navbar')

        <br><br><br>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-left">
                    <br><br><br>
                    <p class="inter-semi-bold" style="font-size:32px; color:#272D37;">Our Story</p>
                    <p class="inter-regular" style="font-size:16px; color:#5F6D7E;">
                        Our journey began with a deep love for Filipino culture and a desire to share its beauty with the world. We noticed a gap in the market for high-quality, authentic Filipino stock media that truly captures the essence of the Philippines. With this in mind, we set out to create a platform that offers a diverse range of images, videos, and audio clips that showcase the country's rich culture and natural beauty.
                        <br><br>
                        In 2018, Filospace was launched as a stock repository that specializes in providing authentic Filipino stock photos and videos. Their platform quickly gained popularity among individuals and businesses who were looking for high-quality and culturally relevant visuals for their projects. The company has since grown to become a leading provider of Filipino stock images and videos, and has expanded its offerings to include a wide range of categories, such as lifestyle, travel, food, and more. With a growing library of content and a strong commitment to quality, Filospace continues to be a go-to source for anyone looking for authentic Filipino stock visuals.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{asset('img/about-1.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>

    </section>

    <section class="gray d-flex flex-column justify-content-center align-items-center p-5">
        <div>
            <p class="inter-semi-bold" style="font-size:32px; color:#272D37;">Our Customers and Cause</p>
        </div>
        <br>
        <div>
            <img src="{{asset('img/about-2.png')}}" alt="Our Customers and Cause" class="img-fluid">
        </div>
        <br><br>
        <div>
            <p class="inter-regular text-center w-50 auto" style="font-size:16px; color:#5F6D7E;">
                Our platform serves a wide range of customers, from content creators and marketers to businesses and individuals who want to add an authentic Filipino touch to their projects. We also believe in using our platform to support local Filipino photographers, videographers, and content creators. By featuring their work and giving them a platform to showcase their talent, we aim to promote and support the Filipino creative industry.
            </p>
        </div>
    </section>

    <section class="d-flex flex-column justify-content-center align-items-center p-5">
        <div>
            <p class="inter-semi-bold" style="font-size:32px; color:#272D37;">Our Business Model</p>
        </div>
        <br>
        <div>
            <img src="{{asset('img/about-3.png')}}" alt="Our Business Model" class="img-fluid">
        </div>
        <br><br>
        <div>
            <p class="inter-regular auto text-center w-50" style="font-size:16px; color:#5F6D7E;">
                Our business model is based on a commission-based system, where photographers and content creators earn a percentage of the sales made from their work. This means that our platform is inclusive and accessible to everyone who has a passion for photography and wants to monetize their work. Our team works closely with our contributors to ensure that our platform offers a diverse range of high-quality and authentic Filipino content.
            </p>
        </div>
    </section>

    <div class="green d-flex justify-content-evenly align-items-center text-white vh-50 p-5" id="founders">
        <div class="p-5 me-5" style="float:left;">
            <p class="inter-semi-bold" style="font-size:32px;">The Founders</p>
            <p class="inter-regular" style="font-size:16px;">
                We are a team of passionate individuals who <br> are dedicated to promoting the Philippines and <br> its rich culture  through our platform. Our team <br> has years of experience in the photography <br> industry and  has been instrumental in driving <br> our vision forward. We also work with a <br> talented team of photographers, content <br> creators, and developers who help us maintain <br> and improve our platform.
            </p>
        </div> 
        <div class="p-5 ms-5">   

            <div class="row">
                <div class="col-lg-6">
                   <img src="{{asset('img/about-4.png')}}" alt="Melyssa Dawn Gullon" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-2">
                    <br>
                    <p class="inter-regular">
                        <b>Melyssa Dawn Gullon</b>
                    </p>
                    <p class="inter-regular">
                        Chief Executive Officer
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mt-2">
                    <br>
                    <p class="inter-regular">
                        <b>Dustin de Castro</b>
                    </p>
                    <p class="inter-regular">
                        Chief Operations Officer
                    </p>
                </div>
                <div class="col-lg-6">
                   <img src="{{asset('img/about-5.png')}}" alt="Dustin de Castro" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                   <img src="{{asset('img/about-6.png')}}" alt="Raymond Yang" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-2">
                    <br>
                    <p class="inter-regular">
                        <b>Raymond Yang</b>
                    </p>
                    <p class="inter-regular">
                        Chief Technology Officer
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mt-2">
                    <br>
                    <p class="inter-regular">
                        <b>Kyla Masangkay</b>
                    </p>
                    <p class="inter-regular">
                        Chief Marketing Officer
                    </p>
                </div>
                <div class="col-lg-6">
                   <img src="{{asset('img/about-7.png')}}" alt="Kyla Masangkay" class="img-fluid">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                   <img src="{{asset('img/about-8.png')}}" alt="Geo Sabaco" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-2">
                    <br>
                    <p class="inter-regular">
                        <b>Geo Sabaco</b>
                    </p>
                    <p class="inter-regular">
                        Chief Financial Officer
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mt-2">
                    <br>
                    <p class="inter-regular">
                        <b>Francine Tiongco</b>
                    </p>
                    <p class="inter-regular">
                        Chief Strategy Officer
                    </p>
                </div>
                <div class="col-lg-6">
                   <img src="{{asset('img/about-9.png')}}" alt="Francine Tiongco" class="img-fluid">
                </div>
            </div>

        </div>
    </div>
@endsection