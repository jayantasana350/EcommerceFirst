@extends('frontend.master')

@section('content')
        <!-- breadcrumb start -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>Check-out</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->


        <!-- section start -->
        <section class="section-b-space">
            <div class="container">
                <div class="checkout-page">
                    <div class="checkout-form">
                        <form action="{{ route('MakePayment') }}" method="POST" id="payment-form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-title">
                                        <h3>Billing Details</h3>
                                    </div>
                                    <div class="row check-out">
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">First Name</div>
                                            <input type="text" name="first_name" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Last Name</div>
                                            <input type="text" name="last_name" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone</div>
                                            <input type="text" name="phone" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email Address</div>
                                            <input type="text" name="email" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Address</div>
                                            <input type="text" name="address" value="" placeholder="Street address">
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Country</div>
                                            <select name="country_id" id="country_id">
                                                @foreach ($countries as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="field-label">State / County</div>
                                            <select name="state_id" id="state_id">

                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Town/City</div>
                                            <select name="city_id" id="city_id">

                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-6 col-xs-12">
                                            <div class="field-label">Postal Code</div>
                                            <input type="text" name="zip_code" value="" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input type="checkbox" name="shipping-option" id="account-option"> &ensp;
                                            <label for="account-option">Create An Account?</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="checkout-details">
                                        <div class="order-box">
                                            <div class="title-box">
                                                <div>Product <span>Total</span></div>
                                            </div>
                                            <ul class="qty">
                                                @php
                                                    $grand_total = 0;
                                                @endphp
                                                @foreach ($carts as $cart)
                                                @php
                                                    $grand_total += ($cart->price * $cart->quantity);
                                                @endphp
                                                <li>{{ $cart->product->title }} <span>${{ $cart->price }} x {{ $cart->quantity }} = ${{ $cart->price *  $cart->quantity}}</span></li>
                                                @endforeach
                                            </ul>
                                            <ul class="sub-total">
                                                <li>Subtotal <span class="count">${{ $grand_total }}</span></li>
                                                <li>Shipping
                                                    <div class="shipping">
                                                        <div class="shopping-option">
                                                            <input type="checkbox" name="free-shipping" id="free-shipping" value="Free Shipping">
                                                            <label for="free-shipping">Free Shipping</label>
                                                        </div>
                                                        <div class="shopping-option">
                                                            <input type="checkbox" name="local-pickup" id="local-pickup" value="Local Pickup">
                                                            <label for="local-pickup">Local Pickup</label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="total">
                                                <li>Total <span class="count">${{ $grand_total }}</span></li>
                                            </ul>
                                        </div>
                                        <div class="payment-box">
                                            <div class="upper-box">
                                                <div class="payment-options">
                                                    <ul>
                                                        <li>
                                                            <div class="radio-option">
                                                                <input type="radio" name="payment" id="payment-1"
                                                                    checked="checked" value="Card">
                                                                <label for="payment-1">Card Payments<span
                                                                        class="small-text">Please send a check to Store
                                                                        Name, Store Street, Store Town, Store State /
                                                                        County, Store Postcode.</span></label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div id="card-element">
                                                                <!-- a Stripe Element will be inserted here. -->
                                                            </div>
                                                              <!-- Used to display form errors -->
                                                            <div id="card-errors" role="alert"></div>
                                                        </li>
                                                        <style>
                                                            .StripeElement{
                                                                box-sizing: border-box;
                                                                height: 40px;
                                                                width: 100%;
                                                                padding: 10px 12px;
                                                                border: 1px solid transparent;
                                                                border-radius: 4px;
                                                                background: white;
                                                                box-shadow: 0 1px 3px 0 #e6ebf1;
                                                                -webkit-transition: box-shadow 150ms ease;
                                                                transition: box-shadow 150ms ease;
                                                            }
                                                            .StripeElement--focus{
                                                                box-shadow: 0 1px 3px 0 #cfd7df;
                                                            }

                                                            .StripeElement--invalid{
                                                                border-color: #fa755a;
                                                            }

                                                            .StripeElement--webkit-autofill{
                                                                background: #fefde5 !important;
                                                            }
                                                        </style>
                                                        <li>
                                                            <div class="radio-option">
                                                                <input type="radio" name="payment" id="payment-2" value="Cash">
                                                                <label for="payment-2">Cash On Delivery<span
                                                                        class="small-text">Please send a check to Store
                                                                        Name, Store Street, Store Town, Store State /
                                                                        County, Store Postcode.</span></label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="radio-option paypal">
                                                                <input type="radio" name="payment" id="payment-3" value="Paypal">
                                                                <label for="payment-3">PayPal<span class="image"><img
                                                                            src="../assets/images/paypal.png"
                                                                            alt=""></span></label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="text-end"><button type="submit" class="btn-solid btn">Place Order</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- section end -->
@endsection

@section('footer_js')
<script src="https://js.stripe.com/v3/"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script> --}}
<script>
$(document).ready(function(){
  $('#country_id').change(function(){
        var countryID = $(this).val();
        if (countryID) {
            $.ajax({
                type:"GET",
                url:"{{ url('api/get-state-list') }}/" +countryID,
                success:function(res){
                    if (res) {
                        $("#state_id").empty();
                        $("#state_id").append('<option>Select State</option>');
                        $.each(res,function(key, value){
                            $("#state_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }else{
                        $("#state_id").empty();
                    }
                }
            });
        }else{
            $("#state_id").empty();
            $("#city_id").empty();
        }
    });
    $('#state_id').change(function(){
        var stateID = $(this).val();
        if (stateID) {
            $.ajax({
                type:"GET",
                url:"{{ url('api/get-city-list') }}/"+stateID,
                success:function(res){
                    if (res) {
                        $("#city_id").empty();
                        $("#city_id").append('<option>Select State</option>');
                        $.each(res,function(key,value){
                            $("#city_id").append('<option value="'+value.id+'">'+value.name+'</option>');
                        });
                    }else{
                        $("#city_id").empty();
                    }
                }
            });
        }else{
            $("#city_id").empty();
        }
	});
});



var stripe = Stripe('pk_test_51I4gfpGvj03eZ2rFmKP9tUpRIf8bEw6dEeWWgYZBJo1TPfWrrZbNr1cDPwXYphAPsD9PI9WY2AkVgefX5BYfakZo00YUCISAZp');
var elements = stripe.elements();

var style = {
  base: {
    color: '#303238',
    fontSize: '16px',
    fontFamily: '"Open Sans", sans-serif',
    fontSmoothing: 'antialiased',
    '::placeholder': {
      color: '#CFD7DF',
    },
  },
  invalid: {
    color: '#e5424d',
    ':focus': {
      color: '#303238',
    },
  },
};
var card = elements.create('card', {style: style});
card.mount('#card-element');

</script>

@endsection
