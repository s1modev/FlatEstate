@extends('layouts.user.master')

@section('content')
<div class="col-lg-7 mx-auto">
    <h2 class="">Checkout</h2>
    <div class="card text-center">
        <div class="card-header">
            <h5 class="m-0 font-weight-bold text-primary text">{{$package->name}}</h5>
        </div>
        <div class="card-body">
            <h5 class=" font-weight-bold">{{$package->title}} / {{$package->price}}$</h5>
            <p class="card-text">{{$package->description}}</p> 
        </div>
        <div class="mt-3">
        <!-- Set up a container element for the button -->
            <div id="paypal-button-container" class="mx-5"></div>
        </div>
        <div>
            <a href="{{route('checkout.stripe', $package->id)}}" class="btn btn-primary btn-lg mb-3">Credit or Debit Card</a>
        </div>
    </div>
    
</div>
@endsection

@section('script')
<script src="https://www.paypal.com/sdk/js?client-id=ASXuNZYGrRFNXXPHKGcDgXEg5TVc8dkKNNKNm9D-RXgkXkfejUmQNz2G7o3C9CR7pNKFrrJlV7p7cO6O&currency=USD"></script>

<script>
    // get product
    
    package_id = {{$package->id}};
    user_id = {{auth()->user()->id}};
    

    // Render the PayPal button into #paypal-button-container
    paypal.Buttons({

        // Call your server to set up the transaction
        createOrder: function(data, actions) {
            return fetch('/api/paypal/order/create/', {
                method: 'post',
                body:JSON.stringify({
                    "package_id":package_id
                })
            }).then(function(res) {
                return res.json();
            }).then(function(orderData) {
                return orderData.id;
            });
        },

        // Call your server to finalize the transaction
        onApprove: function(data, actions) {
            return fetch('/api/paypal/order/capture/', {
                method: 'post',
                body:JSON.stringify({
                    orderId:data.orderID,
                    package_id:package_id,
                    user_id:user_id,
                })
            }).then(function(res) {
                return res.json();
            }).then(function(orderData) {
                // Three cases to handle:
                //   (1) Recoverable INSTRUMENT_DECLINED -> call actions.restart()
                //   (2) Other non-recoverable errors -> Show a failure message
                //   (3) Successful transaction -> Show confirmation or thank you

                // This example reads a v2/checkout/orders capture response, propagated from the server
                // You could use a different API or structure for your 'orderData'
                var errorDetail = Array.isArray(orderData.details) && orderData.details[0];

                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                    return actions.restart(); // Recoverable state, per:
                    // https://developer.paypal.com/docs/checkout/integration-features/funding-failure/
                }

                if (errorDetail) {
                    var msg = 'Sorry, your transaction could not be processed.';
                    if (errorDetail.description) msg += '\n\n' + errorDetail.description;
                    if (orderData.debug_id) msg += ' (' + orderData.debug_id + ')';
                    return alert(msg); // Show a failure message (try to avoid alerts in production environments)
                }

                //redirect after the payment
                window.location = "{{route('post.create')}}";
            });
        }

    }).render('#paypal-button-container');
</script>
@endsection