@extends('frontend.master')

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>product</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!-- section start -->
<section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slick">
                        <div><img src="../assets/images/pro3/1.jpg" alt=""
                                class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                        <div><img src="../assets/images/pro3/2.jpg" alt=""
                                class="img-fluid blur-up lazyload image_zoom_cls-1"></div>
                        <div><img src="../assets/images/pro3/27.jpg" alt=""
                                class="img-fluid blur-up lazyload image_zoom_cls-2"></div>
                        <div><img src="../assets/images/pro3/27.jpg" alt=""
                                class="img-fluid blur-up lazyload image_zoom_cls-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-nav">
                                <div><img src="../assets/images/pro3/1.jpg" alt=""
                                        class="img-fluid blur-up lazyload"></div>
                                <div><img src="../assets/images/pro3/2.jpg" alt=""
                                        class="img-fluid blur-up lazyload"></div>
                                <div><img src="../assets/images/pro3/27.jpg" alt=""
                                        class="img-fluid blur-up lazyload"></div>
                                <div><img src="../assets/images/pro3/27.jpg" alt=""
                                        class="img-fluid blur-up lazyload"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rtl-text">
                    <div class="product-right">
                        <div class="product-count">
                            <ul>
                                <li>
                                    <img src="../assets/images/fire.gif" class="img-fluid" alt="image">
                                    <span class="p-counter">37</span>
                                    <span class="lang">orders in last 24 hours</span>
                                </li>
                                <li>
                                    <img src="../assets/images/person.gif" class="img-fluid user_img" alt="image">
                                    <span class="p-counter">44</span>
                                    <span class="lang">active view this</span>
                                </li>
                            </ul>
                        </div>
                        <h2>Women Pink Shirt</h2>
                        <div class="rating-section">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <h6>120 ratings</h6>
                        </div>
                        <div class="label-section">
                            <span class="badge badge-grey-color">#1 Best seller</span>
                            <span class="label-text">in fashion</span>
                        </div>
                        <h3 class="price-detail">$32.96 <del>$459.00</del><span>55% off</span></h3>
                        <ul class="color-variant">
                            <li class="bg-light0 active"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                        <div id="selectSize" class="addeffect-section product-description border-product">
                            <h6 class="product-title size-text">select size <span><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#sizemodal">size
                                        chart</a></span></h6>
                            <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Sheer
                                                Straight Kurta</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body"><img src="../assets/images/size-chart.jpg" alt=""
                                                class="img-fluid blur-up lazyload"></div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="error-message">please select size</h6>
                            <div class="size-box">
                                <ul>
                                    <li><a href="javascript:void(0)">s</a></li>
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
                                    <input type="text" name="quantity" class="form-control input-number" value="1">
                                    <span class="input-group-prepend"><button type="button"
                                            class="btn quantity-right-plus" data-type="plus" data-field=""><i
                                                class="ti-angle-right"></i></button></span>
                                </div>
                            </div>
                        </div>
                        <div class="product-buttons"><a href="javascript:void(0)" id="cartEffect"
                                class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1"
                                    aria-hidden="true"></i> add to cart</a> <a href="#" class="btn btn-solid"><i
                                    class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a></div>
                        <div class="product-count">
                            <ul>
                                <li>
                                    <img src="../assets/images/icon/truck.png" class="img-fluid" alt="image">
                                    <span class="lang">Free shipping for orders above $500 USD</span>
                                </li>
                            </ul>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">Sales Ends In</h6>
                            <div class="timer">
                                <p id="demo"></p>
                            </div>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">shipping info</h6>
                            <ul class="shipping-info">
                                <li>100% Original Products</li>
                                <li>Free Delivery on order above Rs. 799</li>
                                <li>Pay on delivery is available</li>
                                <li>Easy 30 days returns and exchanges</li>
                            </ul>
                        </div>
                        <div class="border-product">
                            <h6 class="product-title">share it</h6>
                            <div class="product-icon">
                                <ul class="product-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->


<!-- product-tab starts -->
<section class="tab-product m-0 vertical-tab">
    <div class="container">
        <div class="row tab-border">
            <div class="col-xl-2 p-0">
                <ul class="nav nav-tabs nav-material flex-column nav-border" id="top-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                            href="#top-home" role="tab" aria-selected="true">Description</a></li>
                    <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                            href="#top-profile" role="tab" aria-selected="false">Reviews</a></li>
                    <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                            href="#top-contact" role="tab" aria-selected="false">Product tags</a></li>
                </ul>
            </div>
            <div class="col-xl-10">
                <div class="tab-content nav-material" id="top-tabContent">
                    <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                        aria-labelledby="top-home-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                        <p>No reviews yet</p>
                    </div>
                    <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                        <p>black, block1, blue, cotton, purple, skirts, top, under-100, versace, woman</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-tab ends -->


<!-- product section start -->
<section class="section-b-space ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col-12 product-related">
                <h2>related products</h2>
            </div>
        </div>
        <div class="row search-product">
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="../assets/images/pro3/33.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="#"><img src="../assets/images/pro3/34.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="product-page(no-sidebar).html">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="../assets/images/pro3/1.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="#"><img src="../assets/images/pro3/2.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="product-page(no-sidebar).html">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="../assets/images/pro3/27.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="#"><img src="../assets/images/pro3/28.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="product-page(no-sidebar).html">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="../assets/images/pro3/35.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="#"><img src="../assets/images/pro3/36.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="product-page(no-sidebar).html">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="../assets/images/pro3/2.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="#"><img src="../assets/images/pro3/1.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="product-page(no-sidebar).html">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <div class="front">
                            <a href="#"><img src="../assets/images/pro3/28.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="back">
                            <a href="#"><img src="../assets/images/pro3/27.jpg"
                                    class="img-fluid blur-up lazyload bg-img" alt=""></a>
                        </div>
                        <div class="cart-info cart-wrap">
                            <button data-bs-toggle="modal" data-bs-target="#addtocart" title="Add to cart"><i
                                    class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a href="#"
                                data-bs-toggle="modal" data-bs-target="#quick-view" title="Quick View"><i
                                    class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                title="Compare"><i class="ti-reload" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                        <a href="product-page(no-sidebar).html">
                            <h6>Slim Fit Cotton Shirt</h6>
                        </a>
                        <h4>$500.00</h4>
                        <ul class="color-variant">
                            <li class="bg-light0"></li>
                            <li class="bg-light1"></li>
                            <li class="bg-light2"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->

@endsection
