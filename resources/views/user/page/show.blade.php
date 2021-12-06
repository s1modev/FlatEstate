@extends('layouts.user.master')

@section('content')
<div>
    <h1 class="text-center">{{$page->name}}</h1>
    <div>
        {!! $page->content !!}
    </div>
</div>
@endsection

@section('script')

@endsection