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
            <b>Carousel Creation Form</b>
            <br><br>
            @include('layouts.notifications')
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file">Upload Carousel Image</label>
                    <input type="file" class="form-control" name="filename">
                </div>
                <div class="mb-3">
                    <label for="name">Carousel Title</label>
                    <input type="text" class="form-control" name="title">
                </div>


                <button class="btn btn-outline text-white" type="submit" onclick="return confirm('Create the carousel?')" style="float:right; background-color: #717C73;">Create</button>
            </form>
        </div>
    </div>

</div>
@endsection