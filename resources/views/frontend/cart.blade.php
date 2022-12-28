@extends('frontend.master')

@section('content')
        <!-- breadcrumb start -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>cart</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb End -->


        <!--section start-->
        <section class="cart-section section-b-space">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="cart_counter">
                            <div class="countdownholder">
                                Your cart will be expired in<span id="timer"></span> minutes!
                            </div>
                            <a href="checkout.html" class="cart_checkout btn btn-solid btn-xs">check out</a>
                        </div>
                    </div>
                    <form action="{{ route('UpdateCart') }}" method="POST">
                        @csrf
                        <div class="col-sm-12 table-responsive-xs">
                            <table class="table cart-table">
                                <thead>
                                    <tr class="table-head">
                                        <th scope="col">image</th>
                                        <th scope="col">product name</th>
                                        <th scope="col">color</th>
                                        <th scope="col">size</th>
                                        <th scope="col">price</th>
                                        <th scope="col">quantity</th>
                                        <th scope="col">action</th>
                                        <th scope="col">total</th>
                                    </tr>
                                </thead>
                                @php
                                    $grand_total = 0;
                                @endphp
                                @foreach ($carts as $cart)
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="#"><img src="{{ asset('images/' . $cart->product->thumbnail) }}" alt=""></a>
                                        </td>
                                        <td>
                                            <a href="{{ route('SingleProduct', $cart->product->slug) }}" target="_blank">{{ $cart->product->title }}</a>

                                        </td>
                                        <td class="tdsm">
                                            <p style="text-transform: capitalize;">{{ $cart->cartcolor->color_name }}</p>
                                        </td>
                                        <td class="tdsm">
                                            <p style="text-transform: capitalize;">{{ $cart->cartsize->size_name }}</p>
                                        </td>
                                        <td>
                                            <h2 class="unit_price{{ $cart->id }}" data-unit{{ $cart->id }}="{{ number_format($cart->price, 2) }}">${{ number_format($cart->price, 2) }}</h2>
                                        </td>
                                        <td class="tdqt quantity cart-plus-minus">

                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <div class="btn dec qtybutton qty_minus{{ $cart->id }}" style="border: 1px solid #ced4da;">-</div>
                                                    <input type="number" name="quantity[]" class="form-control qty_quantity{{ $cart->id }}" value="{{ $cart->quantity }}">
                                                    <div class="btn inc qtybutton qty_plus{{ $cart->id }}" style="border: 1px solid #ced4da;">+</div>

                                                    <input type="hidden" name="cart_id[]" value="{{ $cart->id }}">
                                                </div>
                                            </div>
                                        </td>
                                        @php
                                            $grand_total += ($cart->price * $cart->quantity);
                                        @endphp
                                        <td class="tdsm">
                                            <a href="{{ route('SingleCartDelete', $cart->id) }}" class="icon"><i class="ti-close"></i></a>
                                        </td>
                                        <td>
                                            <h2 class="td-color unitprice{{ $cart->id }}">${{ number_format($cart->price * $cart->quantity, 2) }}</h2>
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                                <style>
                                    .cart-section tbody tr td {
                                        min-width: 150px;
                                    }

                                    .cart-section tbody tr td.tdsm {
                                        min-width: 100px;
                                    }

                                    .cart-section tbody tr td.tdqt {
                                        min-width: 160px;
                                    }
                                    .cart_position {
                                    position: absolute;
                                    top: -314%;
                                }
                                </style>
                            </table>

                            <div class="cart-buttons d-flex">
                                <div class="col-2">
                                        <button class="btn btn-solid" type="submit"> Cart Update</button>
                                </div>
                                <div class="col-3"><a href="{{ route('ShopPage') }}" class="btn btn-solid">continue shopping</a></div>
                            </div>
                        </form>
                        <div class="table-responsive-md">
                            <table class="table cart-table ">
                                <tfoot>
                                    <tr>
                                        <td>Sub Total :</td>
                                        <td>
                                            <h4 class="grand_total{{ $cart->id }}">${{ number_format($grand_total, 2) }}</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Coupon Discount :</td>
                                        <td>
                                            <h4 class="grand_total{{ $cart->id }}">${{ $coupon_discount ?? 0 }}</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>total price :</td>
                                        <td>
                                            <h2 class="grand_total{{ $cart->id }}">${{ number_format($grand_total - $coupon_discount, 2) }}</h2>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row cart-buttons">
                    <div class="col-6">
                        <div class="cart_position">
                        <h5 class="coupon_des">Enter Your Coupon If you have one</h5>
                        <form class="form-inline subscribe-form" action="{{ route('CartPage') }}" method="get">
                            <div class="form-group mx-sm-3">
                                <input type="text" name="coupon_code" value="{{ $codes ?? '' }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter Coupon Code">
                            </div>
                            <button type="submit" class="btn btn-solid">Apply Coupon</button>
                        </form>
                    </div>
                    </div>

                    <div class="col-6"><a href="{{ route('ProductCheckout') }}" class="btn btn-solid">check out</a></div>
                </div>
            </div>
        </section>
        <!--section end-->




@endsection

@section('footer_js')
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Cart Plus Minus
        $(".cart-plus-minus").append();
            $(".qtybutton").on("click", function() {
                var $button = $(this);
                var oldValue = $button.parent().find("input").val();
                if ($button.text() == "+") {
                    var newVal = parseFloat(oldValue) + 1;
                } else {
                    // Don't allow decrementing below zero
                    if (oldValue > 0) {
                        var newVal = parseFloat(oldValue) - 1;
                    } else {
                        newVal = 0;
                    }
                }
                $button.parent().find("input").val(newVal);
            });


        @foreach ($carts as $car)
        $('.qty_minus{{ $car->id }}').click(function(){
            let qty_quantity = $('.qty_quantity{{ $car->id }}').val();
            let unit_price = $('.unit_price{{ $car->id }}').attr('data-unit{{ $car->id }}');
            $('.unitprice{{ $car->id }}').html('$'+qty_quantity * unit_price);
            // alert(qty_quantity * unit_price);
        });

        $('.qty_plus{{ $car->id }}').click(function(){
            let qty_quantity = $('.qty_quantity{{ $car->id }}').val();
            let unit_price = $('.unit_price{{ $car->id }}').attr('data-unit{{ $car->id }}');
            $('.unitprice{{ $car->id }}').html('$'+qty_quantity * unit_price);
        });

        @endforeach


    </script>
@endsection
