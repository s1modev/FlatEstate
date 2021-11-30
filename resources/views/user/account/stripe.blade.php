@extends('layouts.user.master')

@section('content')

<div class="col-lg-8">
    <form action="{{route('checkout.stripe.pay')}}" method="POST" id="payment-form">
        @csrf
        <div>
            <h5>Order Summury</h5>
            <label for="">required <strong class="text-danger">*</strong></label>
            <div class="card">
                <div class="card-body">
                    <h6 class="">Package: {{$package->name}} / {{$package->title}}</h6>
                    <h6 class="">Billed Today (USD): <strong>${{$package->price}}</strong> </h6>
                </div>
            </div>
        </div>
        <div class="my-4">
            <h5>Payment Information</h5>
            <label for="">This is a secure 128-bit SSL encrypted payment</label>
            <div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <input name="card_holder" type="text" class="form-control mb-3 @error('card_holder') is-invalid @enderror" placeholder="Card Holder Name" value="{{old('card_holder')}}">
                                @error('card_holder')
                                    <p class="text-danger mb-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                                <input type="hidden" name="payment_method" id="payment-method" value="">
                                <input type="hidden" name="package_id" value="{{$package->id}}">

                                @if (session('error'))
                                    <div class="alert alert-danger mb-2">{{session('error')}}</div>
                                @endif
                                <div class="alert alert-danger mb-2 d-none" id="card-error"></div>
                                <div id="card-element" class=" border p-2 rounded" style="min-height: 35px;">

                                </div>
                            </div>
                        </div>
                        
                    </div>
                
                </div>
            </div>
        </div>
        <div>
            <h5>Billing Address</h5>
            <label for="">This is a secure 128-bit SSL encrypted payment</label>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="country" class="m-0">Country <strong class="text-danger">*</strong></label>
                        <select class="form-control bg-light @error('billing_country') is-invalid @enderror" id="country" name="billing_country">
                            <option value="" selected>Choose country</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}" @if(old('billing_country')=="$country->name") selected @endif>{{$country->name}}</option>
                            @endforeach
                        </select>
                        @error('billing_country')
                            <p class="text-danger mb-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="city" class="m-0">City <strong class="text-danger">*</strong></label>
                        <input type="text" value="{{old('billing_city')}}" class="form-control bg-light @error('billing_city') is-invalid @enderror" id="city" placeholder="City" name="billing_city">
                        @error('billing_city')
                            <p class="text-danger mb-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address" class="m-0">Billing Address <strong class="text-danger">*</strong></label>
                        <input type="text" value="{{old('billing_address')}}" class="form-control bg-light @error('billing_address') is-invalid @enderror" id="address" placeholder="Address" name="billing_address">
                        @error('billing_address')
                            <p class="text-danger mb-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                
            </div>
        </div>
        <div>
            <button class="btn btn-primary btn-lg mb-5 mt-3" id="payment-button" type="button">Buy Now ${{$package->price}}</button>

        </div>
    </form>
    
    
</div>
@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe("{{config('services.stripe.key')}}");
    var elements = stripe.elements();
    var cardElement = elements.create('card',{
        style: {
            base: {
            iconColor: '#c4f0ff',
            color: '#000',
            fontWeight: '500',
            fontFamily: 'nunito, Open Sans, Segoe UI, sans-serif',
            fontSize: '16px',
            fontSmoothing: 'antialiased',
            ':-webkit-autofill': {
                color: '#999',
            },
            '::placeholder': {
                color: '#999',
            },
            },
            invalid: {
                iconColor: '#FF0000',
                color: '#FF0000',
            },
        },
    });
    cardElement.mount('#card-element');


    $('#payment-button').on('click', function(){
        $('#payment-button').attr('disabled', true);

        stripe
            .confirmCardSetup("{{$payment_intent->client_secret}}", {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: '{{ auth()->user()->full_name }}',
                    },
                },
            })
            .then(function(result) {
                if(result.error){
                    $('#card-error').text(result.error.message).removeClass('d-none');
                    $('#payment-button').attr('disabled', false);
                }else{
                    $('#payment-method').val(result.setupIntent.payment_method);
                    $('#payment-form').submit();
                }
            });
    })
    

</script>
@endsection