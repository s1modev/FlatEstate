@extends('layouts.admin.master')

@section('content')
<div>
    <h2>Orders</h2>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-danger" role="alert">
                        {{session('status')}}
                    </div>
                @endif
                
                <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">METHOD</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">OPERATIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr class="">
                        <th scope="row" class="align-middle">{{$order->id}}</th>
                        <td class="align-middle">{{$order->method}}</td>
                        <td class="align-middle">${{$order->price}}</td>
                        <td class="align-middle"><span class="badge badge-success text-md text-white rounded-0 font-weight-normal">{{$order->status}}</span></td>
                        <td class="align-middle">
                            <a href="{{route('order.show',$order->id)}}" class="btn btn-primary btn-sm mr-2"><i class="fas fa-eye"></i></a>
                            <form action="{{route('order.delete', $order->id)}}" class="d-inline" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></button>
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{$orders->links("pagination::bootstrap-4")}}
    </div>
</div>
    
@endsection

@section('script')

@endsection