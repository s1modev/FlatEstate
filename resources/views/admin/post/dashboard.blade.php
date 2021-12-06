@extends('layouts.admin.master')

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
                
                <table class="table table-striped table-bordered">
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

@endsection