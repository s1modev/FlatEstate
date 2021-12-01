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
    
    <ul class="nav nav-tabs" id="up">
        <li class="nav-item" style="background: none;">
            <a class="nav-link active text-dark" href="{{route('settings.account')}}" aria-selected="true">Settings</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark" href="{{route('settings.email')}}" aria-selected="false">Email</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark" href="{{route('settings.password')}}"aria-selected="false">Password</a>
        </li>
    </ul>
    
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Account informations:</h4>
                    <form enctype="multipart/form-data" action="{{ route('account.update') }}" method="post">
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
                            <input value="{{auth()->user()->phone_number}}" type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="exemple (+19809795104)" name="phone_number">

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
        
    </div>
</div>
@endsection

@section('script')

@endsection