@extends('layouts.user.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card bg-light text-center card-form">
                    <div class="card-body">
                        <h3>Sign Up Today !</h3>
                        <p>Please fill out this form to register.</p>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input value="{{old('full_name')}}" type="text" class="form-control form-control-lg @error('full_name') is-invalid @enderror" placeholder="Full Name" name="full_name">

                                @error('full_name')
                                <p class="text-danger text-left">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{old('username')}}" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" placeholder="@Username" name="username">

                                @error('username')
                                <p class="text-danger text-left">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input value="{{old('email')}}" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email Address" name="email">

                                @error('email')
                                <p class="text-danger text-left">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" name="password">

                                @error('password')
                                <p class="text-danger text-left">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                            <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg">
                        </form>
                    </div>
                    <a href="{{route('login')}}" class="text-primary text-center mb-2" style="font-size: 16px" >Already have an account ?</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection