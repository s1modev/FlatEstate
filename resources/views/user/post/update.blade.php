@extends('layouts.user.master')

@section('content')
    <div class="mt-3">
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Basic informations</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title" class="m-0">Title <strong class="text-danger">*</strong></label>
                                <input value="{{$post->title}}" type="text" class="form-control bg-light @error('title') is-invalid @enderror" id="title" placeholder="Title" name="title">
                                @error('title')
                                    <p class="text-danger mb-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug" class="m-0">Slug <strong class="text-danger">*</strong></label>
                                <input value="{{$post->slug}}" type="text" class="form-control bg-light @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" name="slug">
                                @error('slug')
                                    <p class="text-danger mb-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deal" class="m-0" >Deal type <strong class="text-danger">*</strong></label>
                                <select class="custom-select bg-light @error('deal') is-invalid @enderror" id="deal" name="deal">
                                    <option value="" selected disabled>Choose type</option>
                                    <option value="sale" @if($post->deal=='sale') selected @endif>Sale</option>
                                    <option value="rent" @if($post->deal=='rent') selected @endif>Rent</option>
                                </select>
                                @error('deal')
                                    <p class="text-danger mb-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group ">
                                <label for="description" class="m-0">Description <strong class="text-danger">*</strong></label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{$post->description}}</textarea> 
                                @error('description')
                                    <p class="text-danger mb-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                            
                            <div id="app">
                                <update-media id="{{$post->id}}" error="@error('media'){{$message}}@enderror"></update-media>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Location</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="country" class="m-0">Country <strong class="text-danger">*</strong></label>
                                    <select class="form-control bg-light @error('country') is-invalid @enderror" id="country" name="country">
                                        <option value="" selected>Choose country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{$country->name}}" @if($post->country=="$country->name") selected @endif>{{$country->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                        <p class="text-danger mb-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="city" class="m-0">City <strong class="text-danger">*</strong></label>
                                    <input type="text" value="{{$post->city}}" class="form-control bg-light @error('city') is-invalid @enderror" id="city" placeholder="City" name="city">
                                    @error('city')
                                        <p class="text-danger mb-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address" class="m-0">Address </label>
                                    <input type="text" value="{{$post->address}}" class="form-control bg-light" id="address" placeholder="Address" name="address">
                                </div>
                                <div>
                                    <label for="" class="m-0">Navigate and mark the exact location</label>
                                    <div id="map" style="height:500px;" class="mb-2 w-100 rounded">
                                    
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="m-0" for="bedrooms_number">Latitude</label>
                                            <input value="{{$post->lat}}" type="text" class="form-control bg-light @error('lat') is-invalid @enderror" placeholder="latitude" name="lat" id="lat" >
                                            @error('lat')
                                                <p class="text-danger mb-1">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label class="m-0" for="bathrooms_number">Longitude</label>
                                            <input value="{{$post->lng}}" type="text" class="form-control bg-light @error('lng') is-invalid @enderror" placeholder="longitude" name="lng" id="lng" >
                                            @error('lng')
                                                <p class="text-danger mb-1">
                                                    {{ $message }}
                                                </p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Property features</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <label class="m-0" for="bedrooms_number">Bedrooms Number <strong class="text-danger">*</strong></label>
                                    <input type="number" value="{{$post->bedrooms_number}}" class="form-control bg-light @error('bedrooms_number') is-invalid @enderror" placeholder="Bedrooms number" id="bedrooms_number" name="bedrooms_number">
                                    @error('bedrooms_number')
                                        <p class="text-danger mb-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="m-0" for="bathrooms_number">Bathrooms Number <strong class="text-danger">*</strong></label>
                                    <input type="number" value="{{$post->bathrooms_number}}" class="form-control bg-light @error('bathrooms_number') is-invalid @enderror" placeholder="Bathrooms number" id="bathrooms_number" name="bathrooms_number">
                                    @error('bathrooms_number')
                                        <p class="text-danger mb-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <label class="m-0">Surface <strong class="text-danger">*</strong></label>
                                    <div class="input-group">
                                        <input value="{{$post->surface}}" type="number" class="form-control bg-light @error('surface') is-invalid @enderror" placeholder="Surface" name="surface" id="surface" >
                                        <div class="input-group-append ">
                                            <button class="btn btn-outline-secondary text-dark" disabled >
                                                ㎡
                                            </button>
                                        </div>
                                    </div>
                                    @error('surface')
                                        <p class="text-danger mb-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label class="m-0">Price <strong class="text-danger">*</strong></label>
                                    <div class="input-group">
                                        <input value="{{$post->price}}" type="number" class="form-control bg-light @error('price') is-invalid @enderror" placeholder="Price" name="price" id="price" >
                                        <div class="input-group-append ">
                                            <button class="btn btn-outline-secondary text-dark" disabled >
                                                $
                                            </button>
                                        </div>
                                    </div>
                                    @error('price')
                                        <p class="text-danger mb-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                            </div>
                            <h5 class="mt-3 mb-0">More Features:</h5>
                            <div class="row ml-1 form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input" type="checkbox" id="garage" value="1" name="garage" @if($post->garage) checked @endif>
                                    <label class="mt-2 ml-1" for="garage">Garage</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input " type="checkbox" id="security" value="1" name="security" @if($post->security) checked @endif>
                                    <label class="mt-2 ml-1" for="security">Security</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input " type="checkbox" id="parking" value="1" name="parking" @if($post->parking) checked @endif>
                                    <label class="mt-2 ml-1" for="parking">Parking</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input " type="checkbox" id="balcony" value="1" name="balcony" @if($post->balcony) checked @endif>
                                    <label class="mt-2 ml-1" for="balcony">Balcony</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input " type="checkbox" id="swimming_pool" value="1" name="swimming_pool" @if($post->swimming_pool) checked @endif>
                                    <label class="mt-2 ml-1" for="swimming_pool">Swimming pool</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input " type="checkbox" id="garden" value="1" name="garden" @if($post->garden) checked @endif>
                                    <label class="mt-2 ml-1" for="garden">Garden</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-control-input " type="checkbox" id="terrace" value="1" name="terrace" @if($post->terrace) checked @endif>
                                    <label class="mt-2 ml-1" for="terrace">Terrace</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h5 class="card-title m-0 text-primary">Publish</h5>
                        </div>
                        <div class="card-body">
                            <button class="btn btn-primary" type='submit'>Publish</button>
                            <button class="btn btn-danger ml-3">Cancel</button>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Category</h5>
                        </div>
                        <div class="card-body">
                            @error('category')
                                <p class="alert alert-danger text-left">{{$message}}</p>
                            @enderror
                            <label class="" for="house">Category <strong class="text-danger">*</strong></label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input " type="radio" name="category" id="house" value="house" required @if($post->category =='house') checked @endif>
                                        <label class="" for="house">House</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="apartement" value="apartement" @if($post->category =='apartement') checked @endif>
                                        <label class="" for="apartement">Apartment</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="villa" value="villa" @if($post->category =='villa') checked @endif>
                                        <label class="" for="villa">Villa</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="office" value="office" @if($post->category =='office') checked @endif>
                                        <label class="" for="office">Office</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="farm" value="farm" @if($post->category =='farm') checked @endif>
                                        <label class="" for="farm">Farm</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="land" value="land" @if($post->category =='land') checked @endif>
                                        <label class="" for="land">Land</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="commercial_property" value="commercial_property" @if($post->category =='commercial_property') checked @endif>
                                        <label class="" for="commercial_property">Commercial property</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="category" id="condo" value="condo" @if($post->category =='condo') checked @endif>
                                        <label class="" for="condo">Condo</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title m-0">Property Condition</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="condition" class="mb-1">Condition <strong class="text-danger">*</strong></label>
                                <select class="custom-select bg-light @error('condition') is-invalid @enderror" name="condition">
                                    <option value="" selected disabled>Select a condition</option>
                                    <option value="new" @if($post->condition =='new') selected @endif>New</option>
                                    <option value="good" @if($post->condition =='good') selected @endif>Good</option>
                                    <option value="to_renovate" @if($post->condition =='to_renovate') selected @endif>To renovate</option>
                                </select>
                                @error('condition')
                                    <p class="text-danger mb-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
    <style>
        
    </style>
@endsection

@section('script')
    
    <script>
        let map;
        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 31.8328106, lng: -6.29404545 },
                zoom: 6,
                scrollwheel: true,
            });

            const uluru = { lat: 33.460057, lng: -6.8727778 };
            let marker = new google.maps.Marker({
                position: uluru,
                map: map,
                draggable: true
            });

            google.maps.event.addListener(map,'click',
                function (event){
                    pos = event.latLng
                    marker.setPosition(pos)
                })

            google.maps.event.addListener(marker,'position_changed',
                function (){
                    let lat = marker.position.lat()
                    let lng = marker.position.lng()
                    $('#lat').val(lat)
                    $('#lng').val(lng)
                })

        }
    </script>
    <script>
        $('#title').change(function(e){
            $.get("{{route('post.checkSlug') }}",
                {'title': $(this).val() },
                function(data){
                    $('#slug').val(data.slug);
                }
            );
        });
    </script>
@endsection