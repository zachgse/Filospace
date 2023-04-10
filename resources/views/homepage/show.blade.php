@extends('layouts.main')

@section('content')
<section class="d-flex flex-column">
    @include('components.navbar')

    <div class="container">

        <br><br>
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
                <select name="tag" style="background-color: transparent; border: none;">
                    <option value="" selected disabled hidden>Category</option>
                    <option value="Image">Images</option>
                    <option value="Video">Video</option>
                    <option value="Music">Music</option>
                    <option value="Vector">Vector</option>
                </select>
                </div>
            </span>
        </form>

        <br>
        <div class="green text-white p-3">
            <p class="inter-semi-bold mt-1" style="font-size: 20px;">
               {{$product->category}} {{$product->id}} : {{$product->title}}
            </p>
            <p class="inter-regular">
                <i>
                    {{$product->tags}}
                </i>
            </p>
        </div>
        <br>

        @include('layouts.notifications')

        <div class="text-center">
            @if($product->category == "Video") 
            <video width=100% height=100% class="border" controls>
                <source src="{{ asset("storage/product/{$product->filename}") }}" type="video/mp4" class="border">
                <source src="{{ asset("storage/product/{$product->filename}") }}" type="video/ogg" class="border">
                Your browser does not support the video tag.
            </video>
            @elseif($product->category == "Music")
            <audio class="border" width=100% height=100% controls>
                <source src="{{ asset("storage/product/{$product->filename}") }}" type="audio/mpeg"> 
            </audio>
            @else 
                <img class="img-fluid border" src="{{ asset("storage/product/{$product->filename}") }}" alt="{{$product->title}} Image">
            @endif
        </div>

        <br><br>

        <div class="text-center p-5" style="border: solid 1px #469F9F;">
            <p class="inter-regular" style="font-size: 18px;">
                PURCHASE A LICENSE
            </p>
            <p class="inter-regular" style="font-size: 15px;">
                All Royalty-Free licenses include global use <br> rights, comprehensive protection, simple pricing <br> with volume discounts available
            </p>
            <p class="inter-regular" style="font-size: 33px;">
                @if ($product->price == 0)
                    FREE
                @else 
                    ₱ <b>{{$product->price}}</b> 
                    <span style="font-size: 20px;">PHP</span>
                @endif 
            </p>

            <form action="{{route('homepage.add-cart', [$product->id])}}" method="POST">
                @csrf
                <button class="btn btn-outline" style="width:295px; height: 79px;" onclick="return confirm('Add the product to the cart?')">
                    ADD TO CART
                </button>
            </form>
            <a href="{{asset('storage/product/' .$product->filename)}}" download>
                <button class="btn btn-outline-2 mt-2" style="width:295px; height: 79px;" onclick="return confirm('Download the item?')">
                    GET A PRINT
                </button>
            </a>

            <br><br>

            <p class="inter-regular" style="font-size: 18px;">
                DETAILS
            </p>

            <p class="inter-regular" style="font-size: 18px;">
                Credit: <span style="color:#469F9F;">{{$product->credit}}</span>
            </p>
            <p class="inter-regular" style="font-size: 18px;">
                Creative Number: <span>{{$product->id}}</span>
            </p>
            <p class="inter-regular" style="font-size: 18px;">
                Product Information: <span>{{$product->description}}</span>
            </p>                                       
        </div>
    </div>

</section>

<br><br>
@endsection