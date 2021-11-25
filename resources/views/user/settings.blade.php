@extends('layouts.user.master')

@section('content')
<div class="col-8 mx-auto">
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
    
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active text-dark" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="true">Settings</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">Email</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link text-dark" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Account informations:</h4>
                    <form enctype="multipart/form-data" action="{{ route('update.account') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="mb-0">Full name</label>
                            <input value="{{auth()->user()->full_name}}" type="text" class="form-control @error('full_name') is-invalid @enderror" placeholder="Full Name" name="full_name">

                            @error('full_name')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Username</label>
                            <input value="{{auth()->user()->username}}" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="@username" name="username">

                            @error('username')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Email</label>
                            <input value="{{auth()->user()->email}}" type="email" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Phone Number</label>
                            <input value="{{auth()->user()->phone_number}}" type="number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="exemple (+19809795104)" name="phone_number">

                            @error('phone_number')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        

                        <div class="form-group" id="app" style="min-height: 100px;">
                            <update-avatar avatar="{{auth()->user()->avatar}}"></update-avatar>
                        </div>
                        <input type="submit" value="Save" class="btn btn-primary px-3 mt-3">
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Email Settings:</h4>
                    <form action="{{ route('update.email') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="mb-0">New Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="New Email" name="email">

                            @error('email')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password">

                            @error('password')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Update Email" class="btn btn-primary px-3 mt-3">
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Password Settings:</h4>
                    <form action="{{ route('update.password') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="" class="mb-0">New Passowrd</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" placeholder="New password" name="new_password">

                            @error('new_password')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="" class="mb-0">Old Password</label>
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror" placeholder="Old password" name="old_password">

                            @error('old_password')
                            <p class="text-danger text-left">{{$message}}</p>
                            @enderror
                        </div>
                        <input type="submit" value="Update Password" class="btn btn-primary px-3 mt-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection