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
            <p class="inter-regular mt-2">
                <b>
                    Keyword: 
                </b>
                {{$keyword}}
            </p>
            <p class="inter-regular mt-2">
                <b>
                    Category: 
                </b>
                {{$tag}}
            </p>
        </div>

        <br>

        <div class="parent border-0">
            @forelse($searched_items as $value)
            <div class="child card img-wrapper border-0">
                <a href="{{route('homepage.show', [$value->id])}}">
                    <img src="{{ asset("storage/product/{$value->filename}") }}" width="auto" class="img-fluid inner-img">         
                </a>        
            </div>
            @empty
            <p class="inter-bold text-center">
                <b>
                    No results found
                </b>
            </p>
            @endforelse
        </div>

    </div>

</section>
@endsection