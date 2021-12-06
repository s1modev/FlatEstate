@extends('layouts.user.master')

@section('content')
    <div class="alert alert-primary text-center mb-5" role="alert" style="font-size: 18px;">
        Your credits: <span class="font-weight-bold">{{auth()->user()->credits}} credits</span>
    </div>
    <div class="row text-center">
        @foreach ($packages as $package)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0 font-weight-bold text-primary text">{{$package->name}}</h5>
                    </div>
                    <div class="card-body">
                        <h5 class=" font-weight-bold">{{$package->title}} / {{$package->price}}$</h5>
                        <p class="card-text">{{$package->description}}</p> 
                        <a class="btn btn-primary" href="{{route('checkout', $package->id)}}">Purchase</a>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
@endsection

@section('script')

@endsection