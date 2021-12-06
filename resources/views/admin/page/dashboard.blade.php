@extends('layouts.admin.master')

@section('content')
<div>
    <h2>Pages</h2>
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
                <a class="btn btn-primary mb-3" href="{{route('page.create')}}">Create Page</a>
                
                <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">CREATED AT</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                    <tr class="">
                        <th scope="row" class="align-middle">{{$page->id}}</th>
                        <td class="align-middle">{{$page->name}}</td>
                        @if($page->status == 'published')
                            <td class="align-middle"><span class="badge badge-success text-md text-white rounded-0 font-weight-normal">{{$page->status}}</span></td>
                        @endif
                        @if($page->status == 'draft')
                            <td class="align-middle"><span class="badge badge-info text-md text-white rounded-0 font-weight-normal">{{$page->status}}</span></td>
                        @endif
                        <td class="align-middle">{{$page->created_at->format('Y-m-d')}}</td>
                        <td class="align-middle">
                            <a href="{{route('page.show',$page->slug)}}" class="btn btn-success btn-sm mr-2"><i class="fas fa-eye"></i></a>
                            <a href="{{route('page.update',$page->id)}}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>
                            <form action="{{route('page.delete', $page->id)}}" class="d-inline" method="post">
                                @csrf
                                <button href="{{route('page.delete', $page->id)}}" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{$pages->links("pagination::bootstrap-4")}}
    </div>
</div>
    
@endsection

@section('script')

@endsection