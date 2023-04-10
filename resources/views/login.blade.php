@extends('layouts.main')

@section('content')

<section class="d-flex flex-column">

    @include('components.navbar')   
    
    <div class="d-flex justify-content-center align-items-center">
        <div class="card contact-form auto shadow-lg p-5 justify-content-center">
            <div class="card-body text-center">
                <br><br><br><br><br><br>
                <h5 class="card-title letter-space" style="font-size: 27px; font-weight: 600 !important;">LOGIN</h5>
                <br><br><br>
                @include('layouts.notifications')
                <form method="POST">
                    @csrf
                    <input type="text" class="form-control input-outline contact-us-input mb-5" placeholder="Username" name="username">
                    <input type="password" class="form-control input-outline contact-us-input mb-5" placeholder="Password" name="password">
                    <button class="btn btn-outline" style="color:white; width: 160px; height:64px;">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection