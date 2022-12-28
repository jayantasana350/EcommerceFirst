@extends('frontend.master')

@section('content')

    <!-- Home slider -->
    <section class="small-slider pt-0 home-fashion mt-0">
        <div class="container container-lg">
            <div class="slider-animate home-slider">
                <div>
                    <div class="home">
                        <img src="../assets/images/home-banner/58.jpg" alt="" class="bg-img blur-up lazyload">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-contain px-padding">
                                        <div>
                                            <h4 class="animated" data-animation-in="fadeInUp">save 30%</h4>
                                            <h1 class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">
                                                special price</h1><a href="#" class="btn btn-solid animated"
                                                data-animation-in="fadeInUp" data-delay-in="0.5">shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="home">
                        <img src="../assets/images/home-banner/57.jpg" alt="" class="bg-img blur-up lazyload">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="slider-contain px-padding">
                                        <div>
                                            <h4 class="animated" data-animation-in="fadeInUp">save 30%</h4>
                                            <h1 class="animated" data-animation-in="fadeInUp" data-delay-in="0.3">
                                                Must have</h1><a href="#" class="btn btn-solid animated"
                                                data-animation-in="fadeInUp" data-delay-in="0.5">shop
                                                now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- banner section start -->
    <section class="banner-goggles banner-padding ratio2_1">
        <div class="container container-lg">
            <div class="row partition3">
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/fashion/banner/38.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>10% off</h4>
                                    <h2>speaker</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/fashion/banner/39.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>10% off</h4>
                                    <h2>earplug</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#">
                        <div class="collection-banner p-right text-end">
                            <div class="img-part">
                                <img src="../assets/images/fashion/banner/40.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt="">
                            </div>
                            <div class="contain-banner banner-3">
                                <div>
                                    <h4>50% off</h4>
                                    <h2>best deal</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- slider and product -->
    <section class="container container-lg section-b-space">
        <div class="row">
            <div class="col-12">
                <div class="title1 wo-border">
                    <h4>recent story</h4>
                    <h2 class="title-inner1 font-cormorant">trending products</h2>
                </div>
            </div>
            <div class="col-xl-2">
                <!-- category start -->
                <header class="left-header left-header-relative">
                    <div class="metro">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav class="sidebar-unset">
                                        <div class="d-xl-none d-block" onclick="closeNav()">
                                            <div class="sidebar-back text-start">
                                                <i class="fa fa-angle-left pe-2" aria-hidden="true"></i> Back
                                            </div>
                                        </div>
                                        <div class="left-sidebar_center">
                                            <ul id="sub-menu" class="sm pixelstrap  sm-vertical ">
                                                <li><a href="#">What's New</a></li>
                                                <li><a href="#">Trending now</a></li>
                                                <li><a href="#">On sale</a></li>
                                                <li><a href="#">Today's Deal</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">lingerie</a></li>
                                                <li><a href="#">Swimwear</a></li>
                                                <li><a href="#">Jewellery</a></li>
                                                <li><a href="#">beauty</a></li>
                                                <li><a href="#">Home Decor</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- category end -->
            </div>
            <div class="col-xl-10">
                <!-- Product section -->
                <div class="section-b-space ratio_asos">
                    <div class="container p-0">
                        <div class="row">
                            <div class="col">
                                <div class="no-slider row">

                                    @foreach ($product as $products)
                                    <div class="product-box">
                                        <div class="img-wrapper">
                                            <div class="front">
                                                <a href="product-page(no-sidebar).html"><img
                                                        src="{{ asset('images/' . $products->thumbnail) }}"
                                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                            </div>
                                            <div class="cart-box cart-box-bottom">
                                                <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                    title="Add to cart"><i class="ti-shopping-cart"></i></button> <a
                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                        class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                                    data-bs-toggle="modal" data-bs-target="#quick-view{{ $products->id }}"
                                                    title="Quick View"><i class="ti-search" aria-hidden="true"></i></a>
                                                <a href="compare.html" title="Compare"><i class="ti-reload"
                                                        aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-detail">
                                            <div class="detail-inline">
                                                <a href="{{ route('SingleProduct', $products->slug) }}">
                                                    <h6>{{ Str::limit($products->title, 15) }}</h6>
                                                </a>

                                                <?php
                                                $count = 0;
                                                ?>
                                                @foreach ($attributes as $item)
                                                    @if ($count >= 1)
                                                    @continue
                                                    @endif
                                                    @if ($item->product_id == $products->id)
                                                    {{ $count++ }}
                                                    <h4>${{ $item->price }}.00</h4>
                                                    @endif
                                                @endforeach

                                            </div>
                                            <ul class="color-variant pt-0">
                                                <li class="bg-light0"></li>
                                                <li class="bg-light1"></li>
                                                <li class="bg-light2"></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider and product -->


    <!-- banner section -->
    <section class="pt-0">
        <div class="container-lg container ">
            <div class="full-banner custom-space p-right text-end">
                <img src="../assets/images/fashion/bottom-banner.jpg" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11">
                            <div class="banner-contain custom-size">
                                <h2>2018</h2>
                                <h3>fashion trends</h3>
                                <h4>special offer</h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- Quick-view modal popup start-->
    @foreach ($product as $products)
    <div class="modal fade bd-example-modal-lg theme-modal" id="quick-view{{ $products->id }}" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content quick-view-modal">
                <div class="modal-body" style="background-image: none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <div class="quick-view-img"><img src="{{ asset('images/' . $products->thumbnail) }}" alt=""
                                    class="img-fluid blur-up lazyload"></div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{ $products->title }}</h2>
                                <div class="border-product">
                                    <h6 class="product-title">product details</h6>
                                    <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium</p>
                                </div>
                                <div class="product-description border-product">
                                <h3>$32.96</h3>
                                    <h6 class="product-title pb-1">Colors</h6>
                                    <div class="color-variant">
                                        <ul>
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">Sizes</h6>
                                    <div class="size-box">
                                        <ul>
                                            <li class="active"><a href="javascript:void(0)">s</a></li>
                                            <li><a href="javascript:void(0)">m</a></li>
                                            <li><a href="javascript:void(0)">l</a></li>
                                            <li><a href="javascript:void(0)">xl</a></li>
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group"><span class="input-group-prepend"><button type="button"
                                                    class="btn quantity-left-minus" data-type="minus" data-field=""><i
                                                        class="ti-angle-left"></i></button> </span>
                                            <input type="text" name="quantity" class="form-control input-number"
                                                value="1"> <span class="input-group-prepend"><button type="button"
                                                    class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                        class="ti-angle-right"></i></button></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><a href="#" class="btn btn-solid">add to cart</a> <a
                                        href="#" class="btn btn-solid">view detail</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Quick-view modal popup end-->
@endsection
