@extends('layouts.admin.master')

@section('content')
<div>
    <h2>Admins</h2>
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
                <a class="btn btn-primary mb-3" href="{{route('admin.create')}}">Create Admin</a>
                
                <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">USERNAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admins as $admin)
                    <tr class="">
                        <th scope="row" class="align-middle">{{$admin->id}}</th>
                        <td class="align-middle">{{$admin->name}}</td>
                        <td class="align-middle">{{$admin->username}}</td>
                        <td class="align-middle">{{$admin->email}}</td>
                        <td class="align-middle">
                            <a href="{{route('admin.update',$admin->id)}}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-edit"></i></a>
                            <form action="{{route('admin.delete', $admin->id)}}" class="d-inline" method="post">
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
        {{$admins->links("pagination::bootstrap-4")}}
    </div>
</div>
    
@endsection

@section('script')

@endsection