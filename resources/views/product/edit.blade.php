@extends('layouts.admin-layout')

@section('content')
<style>
input, textarea, select {
    background-color: #E1DFD9 !important;
    opacity: 0.6;
    color: black !important;
}

</style>

<div class="d-flex justify-content-center align-items-center">

    <div class="card mt-3" style="width: 1000px;">
        <div class="card-body p-4">
            <b>Media Edit Form</b>
            <br><br>
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file">Upload Media</label>
                    <input type="file" class="form-control" name="filename">
                </div>
                <div class="mb-3">
                    <label for="name">Media Category</label>
                    <select name="category" class="form-control" value="{{$product->category}}">
                        <option value="{{$product->category}}"selected>{{$product->category}}</option>
                        <option value="Image">Image</option>
                        <option value="Video">Video</option>
                        <option value="Music">Music</option>
                        <option value="Vector">Vector</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="name">Media Title</label>
                    <input type="text" class="form-control" name="title" value="{{$product->title}}">
                </div>
                <div class="mb-3">
                    <label for="name">Media Tags</label>
                    <input type="text" class="form-control" name="tags" value="{{$product->tags}}">
                </div>
                <div class="mb-3">
                    <label for="name">Media Credit</label>
                    <input type="text" class="form-control" name="credit" value="{{$product->credit}}">
                </div>
                <div class="mb-3">
                    <label for="name">Product Information</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" value="{{$product->description}}">{{$product->description}}</textarea>
                </div>

                <div class="mb-3">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" value="{{$product->price}}">
                </div>

                <button class="btn btn-outline text-white" type="submit" onclick="return confirm('Update the product?')" style="float:right; background-color: #717C73;">Update</button>
            </form>
        </div>
    </div>

</div>
@endsection