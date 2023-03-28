@extends('layouts.admin-layout')

@section('content')
    <div class="container-fluid">
        <h4 class="text-white">Welcome to the Dashboard, {{auth()->user()->name}}</h4>
        <br><br><br>

        <div class="d-flex text-center justify-content-center mb-3">
            <div class="p-2">
                <div class="card p-3" style="width: auto;">
                    <div class="card-body">
                        <h2 class="card-title">{{$product}}</h2>
                        <br>
                        <p>Total number of Products</p>
                    </div>
                </div>
            </div>
            <div class="p-2">
                <div class="card p-3" style="width: auto;">
                    <div class="card-body">
                        <h2 class="card-title">{{$inquiry}}</h2>
                        <br>
                        <p>Total number of Inquiries</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection