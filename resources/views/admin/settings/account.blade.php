@extends('layouts.admin.master')

@section('content')
<div class="">
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
    
    <ul class="nav nav-tabs" id="up">
        <li class="nav-item" style="background: none;">
            <a class="nav-link active text-dark" href="{{route('admin.account.update')}}" aria-selected="true">Settings</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark" href="{{route('admin.password.update')}}"aria-selected="false">Password</a>
        </li>
    </ul>
    
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Account informations:</h4>
                    <form enctype="multipart/form-data" action="{{ route('admin.account.update', $admin['id']) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="mb-0">Full name</label>
                            <input value="{{$admin['name']}}" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Full Name" name="name">

                            @error('name')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Username</label>
                            <input value="{{$admin['username']}}" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="@username" name="username">

                            @error('username')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Email</label>
                            <input value="{{$admin['email']}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email">

                            @error('email')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>

                        <input type="submit" value="Save" class="btn btn-primary px-3 mt-3">
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection