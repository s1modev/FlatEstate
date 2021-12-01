@extends('layouts.admin.master')

@section('content')
<div>
    <h2>Create Package</h2>
    <form action="{{route('package.update', $package->id)}}" method="post">
    @csrf
    <div class="row">
        
        <div class="col-9">
            <div class="card py-2 px-3">
                <div class="form-group">
                    <label for="name" class="m-0">Name <strong class="text-danger">*</strong></label>
                    <input type="text" value="{{$package->name}}" class="form-control bg-light @error('name') is-invalid @enderror" placeholder="Name" name="name">
                    @error('name')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class="m-0">Price <strong class="text-danger">*</strong></label>
                    <div class="input-group">
                        <input type="number" value="{{$package->price}}" class="form-control bg-light @error('price') is-invalid @enderror" placeholder="Price" name="price">
                        <div class="input-group-append">
                            <span class="input-group-text">$</span>
                        </div>
                    </div>
                    @error('price')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="title" class="m-0">Title <strong class="text-danger">*</strong></label>
                    <input type="text" value="{{$package->title}}" class="form-control bg-light @error('title') is-invalid @enderror" placeholder="Title" name="title">
                    @error('title')
                        <p class="text-danger mb-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class="m-0">Description</label>
                    <textarea class="form-control bg-light @error('description') is-invalid @enderror" placeholder="Description" name="description" rows="3">{{$package->description}}</textarea>
                    @error('description')
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
                    <button class="btn btn-danger mx-1">Cancel</button>
                </div>
            </div>
            <div class="mt-2 card">
                <div class="card-header">
                    <h5 class=" m-0">Status <strong class="text-danger">*</strong></h5>
                </div>
                <div class="card-body">
                    <select name="status" class="form-control">
                        <option value="published" @if($package->status=='published') selected @endif>Published</option>
                        <option value="draft" @if($package->status=='draft') selected @endif>Draft</option>
                    </select>
                </div>
            </div>
        </div>
        
    </div>
</form>
</div>
    
@endsection

@section('script')

@endsection