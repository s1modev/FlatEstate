@extends('layouts.admin.master')

@section('content')
<div>
    
    <div class="row">
        <div class="col-8">
        <h2>Order informations</h2>
            <div class="card">
                <div class="card-body">
                    <p>Created At: <strong>{{($order->created_at->format('Y-m-d H:m'))}}</strong></p>
                    <p>Payment method: <strong>{{($order->method)}}</strong></p>
                    <p>Total: <strong>{{($order->price)}}</strong></p>
                    <p>Status: <strong>{{($order->status)}}</strong></p>
                    <p>Client Name: <strong>{{($user->full_name)}}</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('script')

@endsection