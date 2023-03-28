@extends('layouts.admin-layout')

@section('content')

<style>
    table {
        background-color: white;
        width: 90% !important;
        margin: auto;
        text-align: center; 
    }

    thead {
        background-color: #e1e1e1;
        border: solid 1px #e1e1e1 !important;
    }

    th {
        border: none !important;
    }

    tr {
        vertical-align: middle;
    }

    td {
        max-width:100px; 
        word-wrap:break-word;
    }

    .btn-outline, .btn-outline:hover {
        background-color: #717C73 !important;
        color: white;
    }

    .special {
        width: 350px;
    }

</style>

<div class="container-fluid">
    <div class="card" style="min-height: 90vh;">
        <div class="card-body p-5">
            <h4 class="text-center">List of Products</h4>
            <br><hr><br>
            @include('layouts.notifications')
            <a href="{{route('product.create')}}">
                <button class="btn btn-outline">+ Add Product</button>
            </a>
            <br><br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" class="special">Product</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Category</th>
                            <th scope="col">Credit</th>
                            <th scope="col">Information</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse($record as $index => $value)
                            <tr>
                                <td>
                                    {{$loop->iteration}}
                                </td>

                                <td>
                                    @if ($value->category == "Video")
                                        <video width=200 height=200 controls>
                                            <source src="storage/product/{{$value->filename}}" type="video/mp4">
                                            <source src="storage/product/{{$value->filename}}" type="video/ogg">
                                            Your browser does not support the video tag.
                                        </video>
                                    @elseif ($value->category == "Music")
                                        <audio width=100 height=200 controls>
                                            <source src="storage/product/{{$value->filename}}" type="audio/mpeg"> 
                                        </audio>
                                    @else
                                        <img src="storage/product/{{$value->filename}}" alt="{{$value->title}} Image" width=200 height=200>
                                    @endif
                                </td>

                                <td>
                                    <div class="mb5">{{ $value->title }}</div>
                                </td>

                                <td>
                                    <div class="mb5">{{$value->tags}}</div>
                                </td>

                                <td>
                                    <div class="mb5">{{ $value->category }}</div>
                                </td>

                                <td>
                                    <div class="mb5">{{ $value->credit }}</div>                        
                                </td>

                                <td>
                                    <div class="mb5">{{ $value->description }}</div>    
                                </td>

                                <td>
                                    <div class="mb5">{{$value->price}}</div>
                                </td>

                                <td>
                                    <button type="button" class="btn btn-sm btn-outline btn-raised dropdown-toggle" data-bs-toggle="dropdown">Actions <span class="caret"></span></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton2">
                                        <a class="dropdown-item" href="{{route('product.edit', [$value->id])}}">Edit</a>
                                        <form action="{{route('product.delete', [$value->id])}}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit" onclick="return confirm('Delete the product?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="9">
                                    <p class="text-center">No record found yet.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tr>
                    </tbody>
                </table>
            </div>
            <br><br>
            <ul class="pagination" style="float:right !important; margin-right: 80px;">
                <li class="page-item" >{{ $record->links() }}</li>
            </ul>
        </div>

    </div>

</div>

@endsection