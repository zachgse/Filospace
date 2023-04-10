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

        @if($products->isEmpty())
            <div class="parent border-0">
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
                <div class="child card img-wrapper border-0">
                    <img src="{{asset('img/sample-img.png')}}" width="auto" class="img-fluid">                   
                </div>
            </div>
        @else
            <div class="parent border-0">
                @foreach($products as $value)
                <div class="child card img-wrapper border-0" style="margin: 10px;">
                    @if ($value->category == "Video")
                        <a href="{{route('homepage.show', [$value->id])}}">
                            <video width=auto height=auto controls>
                                <source src="{{ asset("storage/product/{$value->filename}") }}" type="video/mp4">
                                <source src="{{ asset("storage/product/{$value->filename}") }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </a>
                    @elseif ($value->category == "Music") 
                        <a href="{{route('homepage.show', [$value->id])}}">
                            <audio width=auto height=auto controls>
                                <source src="{{ asset("storage/product/{$value->filename}") }}" type="audio/mpeg"> 
                            </audio>
                        </a>
                    @else
                        <a href="{{route('homepage.show', [$value->id])}}">
                            <img src="{{ asset("storage/product/{$value->filename}") }}" width="auto" class="img-fluid inner-img">
                        </a>
                    @endif
                </div>
                @endforeach
            </div>
        @endif
    </div>

</section>

<br><br>
@endsection