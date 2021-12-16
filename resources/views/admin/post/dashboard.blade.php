@extends('layouts.admin.master')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
@endsection

@section('content')
<div>
    <h2>Posts</h2>
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
                        <th scope="col">TITLE</th>
                        <th scope="col">CATEGORY</th>
                        <th scope="col">COUNTRY</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    {{--
                    @foreach ($posts as $post)
                    <tr class="">
                        <th scope="row" class="align-middle">{{$post->id}}</th>
                        <td class="align-middle">{{$post->title}}</td>
                        <td class="align-middle">{{$post->category}}</td>
                        <td class="align-middle">{{$post->country}}</td>
                        <td class="align-middle">
                            <a href="{{route('post.show',$post->slug)}}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-eye"></i></a>
                            <form action="{{route('admin.post.delete', $post->id)}}" class="d-inline" method="post">
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
    <div class="d-flex justify-content-center">
        {{$posts->links("pagination::bootstrap-4")}}
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
        "ajax": "{{ route('admin.post.datatable') }}",
        "language": {
            processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>'
        },
        "columnDefs": [
            { "searchable": true, "targets": 0 }
        ],
        "columns": [
            { data: 'id', name: 'id', className: 'font-weight-bold align-middle' },
            { data: 'title', name: 'title', className: 'align-middle' },
            { data: 'category', name: 'category', className: 'align-middle' },
            { data: 'country', name: 'country', className: 'align-middle' },
            { data: 'action', name: 'action', className: 'align-middle' },
            
        ]
    });
});
</script>
@endsection