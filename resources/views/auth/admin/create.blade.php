@extends('layouts.admin.master')

@section('content')
<div>
    <h2>Create Admin</h2>
    <form action="{{route('admin.create')}}" method="post">
    @csrf
    <div class="row">
        
        <div class="col-9">
            <div class="card py-2 px-3">
                <div class="form-group">
                    <label for="name" class="m-0">Full Name <strong class="text-danger">*</strong></label>
                    <input type="text" value="{{old('name')}}" class="form-control bg-light @error('name') is-invalid @enderror" placeholder="Name" name="name">
                    @error('name')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username" class="m-0">Username<strong class="text-danger">*</strong></label>
                    <input type="text" value="{{old('username')}}" class="form-control bg-light @error('username') is-invalid @enderror" placeholder="@username" name="username">
                    @error('username')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class="m-0">Email <strong class="text-danger">*</strong></label>
                    <input type="email" value="{{old('email')}}" class="form-control bg-light @error('email') is-invalid @enderror" placeholder="Email" name="email">
                    @error('email')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="m-0">Password <strong class="text-danger">*</strong></label>
                    <input type="password" class="form-control bg-light @error('password') is-invalid @enderror" placeholder="Password" name="password">
                    @error('password')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="m-0">Password Confirmation<strong class="text-danger">*</strong></label>
                    <input type="password" class="form-control bg-light @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation" name="password_confirmation">
                    @error('password_confirmation')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-primary font-weight-bold m-0">Publish</h5>
                </div>
                <div class="card-body">
                    <button class="btn btn-primary mr-1">Submit</button>
                    <a class="btn btn-danger ml-3" href="{{route('admin.dashboard')}}">Cancel</a>
                </div>
            </div>
            
        </div>
        
    </div>
</form>
</div>
    
@endsection

@section('script')

@endsection