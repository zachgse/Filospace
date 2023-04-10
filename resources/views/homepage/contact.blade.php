@extends('layouts.main')

@section('content')

<section class="d-flex flex-column">

    @include('components.navbar')   
    
    <div class="d-flex justify-content-center align-items-center">
        <div class="card contact-form auto p-5 shadow-lg">
            <div class="card-body text-center">
                <h5 class="card-title letter-space" style="font-size: 27px; font-weight: 600 !important;">CONTACT US</h5>
                <br><br><br>
                @include('layouts.notifications')
                <form action="{{route('homepage.inquiry')}}" method="POST">
                    @csrf
                    <input type="text" class="form-control input-outline contact-us-input mb-5" placeholder="Name" name="name">
                    <input type="email" class="form-control input-outline contact-us-input mb-5" placeholder="Email" name="email">
                    <textarea rows="7" cols="50" placeholder="Write something..."  class="form-control contact-us-textarea input-outline mb-5" name="description"></textarea>
                    <button class="btn btn-outline" style="color:white; width: 160px; height:64px;">Submit</button>
                </form>
            </div>
        </div>

        <div class="contact-us-icons">
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
    </div>
</section>

@endsection