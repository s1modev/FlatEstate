@extends('layouts.admin.master')
@section('header')
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('content')
<div>
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                <h3>{{$orders_number}}</h3>

                <p>New Orders</p>
                </div>
                <div class="icon">
                <i class="ion ion-bag"></i>
                </div>
                <a href="{{route('order.dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                <h3>{{$posts_number}}</h3>

                <p>Posts</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{route('admin.post.dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                <h3>{{$users_number}}</h3>

                <p>User Registrations</p>
                </div>
                <div class="icon">
                <i class="ion ion-person-add"></i>
                </div>
                <a href="{{route('user.dashboard')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-6">
        <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
                </div>
                <div class="icon">
                <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    
</div>
    
@endsection

@section('script')

@endsection