@extends('layouts.admin.master')

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
                
                <table class="table table-striped table-bordered">
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
                                <button href="{{route('package.delete', $package->id)}}" class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>
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
</div>
    
@endsection

@section('script')

@endsection