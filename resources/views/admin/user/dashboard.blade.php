@extends('layouts.admin.master')

@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

@endsection

@section('content')
<div>
    <h2>Users</h2>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{session('status')}}
                    </div>
                @endif
                
                <table class="table table-striped table-bordered w-100" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PHONE NUMBER</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    {{--
                    @foreach ($users as $user)
                    <tr class="">
                        <th scope="row" class="align-middle">{{$user->id}}</th>
                        <td class="align-middle">{{$user->full_name}}</td>
                        <td class="align-middle">{{$user->email}}</td>
                        <td class="align-middle">{{$user->phone_number}}</td>
                        <td class="align-middle">
                            <form action="{{route('user.delete', $user->id)}}" class="d-inline" method="post">
                                @csrf
                                <button href="{{route('user.delete', $user->id)}}" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                    --}}
                    
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{$users->links("pagination::bootstrap-4")}}
    </div>
</div>
    
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#datatable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('user.datatable') }}",
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>'
        },
        "columnDefs": [
            { "searchable": true, "targets": 0 }
        ],
        "columns": [
            { data: 'id', name: 'id', className: 'font-weight-bold align-middle' },
            { data: 'full_name', name: 'full_name', className: 'align-middle' },
            { data: 'email', name: 'email', className: 'align-middle' },
            { data: 'phone_number', name: 'phone_number', className: 'align-middle' },
            { data: 'action', name: 'action', className: 'align-middle' },
        ]
    });
});
</script>
@endsection