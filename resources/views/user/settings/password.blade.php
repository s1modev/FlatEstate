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
    
    <ul class="nav nav-tabs">
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark" href="{{route('settings.account')}}" aria-selected="false">Settings</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark " href="{{route('settings.email')}}" aria-selected="false">Email</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark active" href="{{route('settings.password')}}"aria-selected="true">Password</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        
        <div class="tab-pane fade show active" id="password" role="tabpanel" aria-labelledby="password-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Password Settings:</h4>
                    <form action="{{ route('password.update') }}" method="post">
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