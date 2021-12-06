@extends('layouts.user.master')

@section('content')
    <div class="row mt-4">
        <div class="col-lg-8">
            <div>
                <h4 class="font-weight-bold">{{$post->title}}</h4>
                <div class="row">
                    <div class="d-inline col ml-auto">
                        <h4 class="text-primary d-inline font-weight-bold">{{number_format($post->price) }} $</h4>
                    </div>
                    <div class="d-inline col mr-auto">
                        <h4 class="display-6 text-right "><span class="badge badge-success d-inline text-capitalize">{{$post->category}} For {{$post->deal}}</span></h4>
                    </div>
                </div>
                
                <p class="font-weight-bold " style="font-size: 16px;"><i class="fas fa-map-marker-alt mr-2 text-muted" style="font-size:18px"></i>{{$post->country}}, {{$post->city}}@if($post->address), {{$post->address}}@endif</p>
            </div>
            <div id="app" style="min-height: 450px;">
                <media-slider id="{{$post->id}}"></media-slider>
            </div>
            
            <div class="mt-4">
                <div class="">
                    <h5 class="font-weight-bold"><i class="far fa-file-alt"></i> Full Description :</h4>
                    <p style="font-size: 15px;" >{!! nl2br(e($post->description)) !!}</p>
                </div>
            </div>
            <div class="mt-4">
                <h5 class="font-weight-bold"><i class="far fa-info"></i> Features :</h4>
                <div class="row">
                    @php
                        $features = ['garage', 'security', 'parking', 'balcony', 'swimming_pool', 'garden', 'terrace'];
                    
                    @endphp
                    @foreach ($features as $feature)
                        @if($post->$feature)
                            <div class="col-4 my-2 text-lg text-capitalize">
                                <i class="fas fa-check text-success"></i> <span>{{$feature}}</span> 
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="mt-4">
                <table class="table table-striped table-bordered" style="font-size: 15px;">
                    <tbody>
                        <tr>
                            <th><i class="fas fa-bed mr-2"></i> Bedrooms Number</th>
                            <th>{{$post->bedrooms_number}}</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-bath mr-2"></i> Bathrooms Number</th>
                            <th>{{$post->bathrooms_number}}</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-ruler-combined mr-2"></i> Surface</th>
                            <th>{{$post->surface}} m²</td>
                        </tr>
                        <tr>
                            <th><i class="fas fa-info-circle mr-2"></i> Condition</th>
                            <th>{{$post->condition}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @if ($post->lat && $post->lng)
                <div class="mt-4">
                    <h5 class="font-weight-bold"><i class="far fa-map"></i> Map Location:</h5>
                    <div id="map" style="height:500px;" class="my-3 w-100 ">
                    </div>
                </div>
            @endif
            
            
        </div>
        <div class="col-lg-4">
            <div class="card text-white bg-success">
                <div class="card-header">
                    <h5 class="mb-0">Contact agent</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img style="max-height: 100px;" class="img-fluid rounded-circle" src="{{asset('user_avatar/'.$agent->avatar)}}" alt="">
                        </div>
                        <div class="col-8 px-0">
                            <h5>{{$agent->full_name}}</h5>
                            <br>
                            @if ($agent->phone_number)
                                <h6><i class="fas fa-phone-alt mr-1"></i>{{$agent->phone_number}}</h6>
                            @endif
                            <h6><i class="fas fa-envelope mr-1"></i>{{$agent->email}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4>Contact Agent</h4>
                    @if (session('success'))
                        <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    
                    <form action="{{route('send.email')}}" method='post'>
                        @csrf
                        <div class="form-group">
                            <input type="text" value="{{old('name')}}" class="form-control bg-light @error('name') is-invalid @enderror" placeholder="Name *" name="name">
                            @error('name')
                                <p class="text-danger mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{old('email')}}" class="form-control bg-light @error('email') is-invalid @enderror" placeholder="Email *" name="email">
                            @error('email')
                                <p class="text-danger mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{old('phone_number')}}" class="form-control bg-light @error('phone_number') is-invalid @enderror" placeholder="Phone Number *" name="phone_number">
                            @error('phone_number')
                                <p class="text-danger mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control bg-light @error('message') is-invalid @enderror" placeholder="Message *" name="message" rows="5">{{old('message')}}</textarea>
                            @error('message')
                                <p class="text-danger mb-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('script')
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
        type="text/javascript"></script>
<script>
        let map;
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {lat: {{$post->lat}}, lng: {{$post->lng}}},
                zoom: 11,
                scrollwheel: true,
            });

            const uluru = {lat: {{$post->lat}}, lng: {{$post->lng}}};
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: false
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap"
            type="text/javascript"></script>
@endsection