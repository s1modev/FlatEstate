@extends('layouts.user.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card bg-light  card-form">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>Password reset !</h3>
                            <p class="text-md">Please enter you new password.</p>
                        </div>

                        @if(session('status'))
                            <div class="alert alert-danger">
                                {{session('status')}}
                            </div>
                        @endif
                        <form action="{{ route('password.reset') }}" method="post">
                            @csrf
                            <div>
                                <input type="hidden" value="{{$email}}" name="email">
                                <input type="hidden" value="{{$token}}" name="token">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="New Password" name="password">

                                @error('password')
                                <p class="text-danger text-left">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="New Password Confimation" name="password_confirmation">
                            </div>
                            
                            <input type="submit" value="Reset Password" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection