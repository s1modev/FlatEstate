@extends('layouts.admin.master')

@section('header')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection

@section('content')
<div>
    <h2>Packages</h2>
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
                <a class="btn btn-primary mb-3" href="{{route('package.create')}}">Create package</a>
                
                <table class="table table-striped table-bordered w-100" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">CREATED AT</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                {{--
                    @foreach ($packages as $package)
                    <tr class="">
                        <th scope="row" class="align-middle">{{$package->id}}</th>
                        <td class="align-middle">{{$package->name}}</td>
                        <td class="align-middle">{{$package->created_at->format('Y-m-d')}}</td>
                        @if($package->status == 'published')
                            <td class="align-middle"><span class="badge badge-success text-md text-white rounded-0 font-weight-normal">{{$package->status}}</span></td>
                        @endif
                        @if($package->status == 'draft')
                            <td class="align-middle"><span class="badge badge-info text-md text-white rounded-0 font-weight-normal">{{$package->status}}</span></td>
                        @endif
                        <td class="align-middle">
                            <a href="{{route('package.update',$package->id)}}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>
                            <form action="{{route('package.delete', $package->id)}}" class="d-inline" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>
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
</div>
    
@endsection

@section('script')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    $('#datatable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('package.datatable') }}",
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>'
        },
        "columnDefs": [
            { "searchable": true, "targets": 0 }
        ],
        "columns": [
            { data: 'id', name: 'id', className: 'font-weight-bold align-middle' },
            { data: 'name', name: 'name', className: 'align-middle' },
            { data: 'created_at', name: 'created_at', className: 'align-middle' },
            { data: 'status', name: 'status', className: 'align-middle' },
            { data: 'action', name: 'action', className: 'align-middle' },
        ]
    });
});

</script>
@endsection