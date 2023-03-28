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

</style>

<div class="container-fluid table-responsive">
    <div class="card" style="min-height: 90vh;">
        <div class="card-body p-5">
            <h4 class="text-center">List of Inquiries</h4>
            <br><hr><br>
            @include('layouts.notifications')
            <br><br><br>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
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
                                    <div class="mb5">{{ $value->name }}</div>
                                </td>

                                <td>
                                    <div class="mb5">{{$value->email}}</div>
                                </td>

                                <td>
                                    <div class="mb5">{{$value->description}}</div>
                                </td>

                                <td>
                                    <div class="mb5">{{ $value->created_at->format("d F Y h:i A") }}</div>
                                </td>

                            
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
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