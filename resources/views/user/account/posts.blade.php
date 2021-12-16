@extends('layouts.user.master')

@section('header')
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
        "ajax": "{{ route('account.posts.datatable', auth()->user()->id) }}",
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