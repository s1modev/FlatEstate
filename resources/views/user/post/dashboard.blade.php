@extends('layouts.user.master')

@section('content')
<div class="">
    <div class="container">
        <form action="{{route('posts')}}" category="get">
            <div class="row mb-4">
                <div class="col-lg-8  mx-auto">
                    <div class="input-group">
                        <input value="{{$search}}" name="search" class="form-control border-secondary py-2 btn-lg" category="search" placeholder="search">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" category="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="m-auto" style="width: 23%;">
                    <select name="deal" id="deal" class="form-control" onchange="this.form.submit()">
                        <option value="">All</option>
                        <option value="sale" @if($deal=="sale")selected @endif>For Sale</option>
                        <option value="rent" @if($deal=="rent")selected @endif>For Rent</option>
                    </select>
                </div>
                <div class=" m-auto" style="width: 23%;">
                    <select name="country" id="country" class="form-control" onchange="this.form.submit()">
                        <option value="" selected class="text-muted" style="background: #efefef">country</option>
                        @foreach($countries as $countrySeed)
                            <option value="{{$countrySeed->name}}" @if($countrySeed->name==$country) selected @endif>{{$countrySeed->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" m-auto" style="width: 23%;">
                    <select name="category" id="category" class="form-control" onchange="this.form.submit()">
                        <option value="" selected class="text-muted" style="background: #efefef">Category</option>
                        <option value="house" @if($category=="house")selected @endif>House</option>
                        <option value="villa" @if($category=="villa")selected @endif>Villa</option>
                        <option value="farm" @if($category=="farm")selected @endif>Farm</option>
                        <option value="commecial_property" @if($category=="commecial_property")selected @endif>Commecial Property</option>
                        <option value="apartement" @if($category=="apartement")selected @endif>apartement</option>
                        <option value="office" @if($category=="office")selected @endif>office</option>
                        <option value="land" @if($category=="land")selected @endif>land</option>
                        <option value="condo" @if($category=="condo")selected @endif>condo</option>
                    </select>
                </div>
                <div class=" m-auto" style="width: 23%;">
                    <select name="sortby" id="sortby" class="form-control" onchange="this.form.submit()">
                        <option value="newest" @if($sortby=='newest')selected @endif>Newest</option>
                        <option value="oldest" @if($sortby=='oldest')selected @endif>Oldest</option>
                    </select>
                </div>
            </div>
        </form>
        <hr>
    </div>

    <div class="card-group row w-100 mx-auto">
            @foreach($posts as $post)
            
                <div class="col-12 col-md-6 col-xl-4 mx-auto mx-lg-n1" style="max-width: 24rem;">
                <a href="{{route('post.show', $post->slug)}}" class="text-decoration-none text-dark">
                    <div class="card align-self-center w-100">
                        <div class="position-relative">
                            <img class="card-img-top" src="{{asset('post_images/'.$post->avatar)}}" style="width: 100%; height: 180px">
                            <div class="bottom-right" style="font-size: 18px;"><span class="badge badge-primary">{{$post->surface}}00 m²</span></div>
                            <div class="top-left" style="font-size: 20px;"><span class="badge badge-success">For {{$post->deal}}</span></div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h4 class="text-primary ellipsis">{{number_format($post->price) }}$</h4>
                                </div>
                                <div class="col">
                                    <div class="text-right"><i class="far fa-calendar-alt"></i> {{$post->created_at->format('Y-m-d')}}</div>
                                </div>
                            </div>
                            <h5 class="display-5 ellipsis">{{$post->title}}</h5>
                            <p class="ellipsis"><i class="fas fa-map-marker-alt mr-2"></i>{{$post->country}}, {{$post->city}}</p>
                            <div class="row" style="font-size:18px">
                                <div class="col-4">
                                    <i class="fas fa-bed mr-2"></i><span>{{$post->bedrooms_number}}</span>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-bath mr-2"></i><span>{{$post->bathrooms_number}}</span>
                                </div>
                                <div class="col-4">
                                    <i class="fas fa-ruler-combined mr-2"></i><span>{{$post->surface}}m²</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
            
            @endforeach
    </div>
    <div class="d-flex justify-content-center">
    {{$posts->links("pagination::bootstrap-4")}}
    </div>
</div>
@endsection

@section('script')
<script>

</script>
@endsection
