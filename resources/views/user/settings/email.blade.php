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
            <a class="nav-link text-dark" href="{{route('settings.account')}}" aria-selected="false">Settings</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark active" href="{{route('settings.email')}}" aria-selected="true">Email</a>
        </li>
        <li class="nav-item" style="background: none;">
            <a class="nav-link text-dark" href="{{route('settings.password')}}"aria-selected="false">Password</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
    
        <div class="tab-pane fade show active" id="email" role="tabpanel" aria-labelledby="email-tab">
            <div class="card bg-light card-form border-top-0 shadow-none">
                <div class="card-body">
                    <h4 class="">Email Settings:</h4>
                    <form action="{{ route('email.update') }}" method="post">
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
        
    </div>
</div>
@endsection

@section('script')

@endsection