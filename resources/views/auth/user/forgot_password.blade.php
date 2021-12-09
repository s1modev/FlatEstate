@extends('layouts.user.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card bg-light  card-form">
                    <div class="card-body">
                        <div class="text-center">
                            <h3>Password reset !</h3>
                            <p class="text-md">Please enter your email.</p>
                        </div>
                        
                        @if(session('success'))
                            <div class="alert alert-primary">
                                {{session('success')}}
                            </div>
                        @endif
                        @if(session('status'))
                            <div class="alert alert-danger">
                                {{session('status')}}
                            </div>
                        @endif
                        <form action="{{ route('forgot_password') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input value="{{old('email')}}" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email">

                                @error('email')
                                <p class="text-danger text-left">{{$message}}</p>
                                @enderror
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