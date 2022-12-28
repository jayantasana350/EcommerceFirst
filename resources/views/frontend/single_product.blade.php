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
                            @foreach ($product_gallery as $gallery)
                            <div><img src="{{ asset('gallery/'.$gallery->created_at->format('Y/m/'). $gallery->product_id .'/' . $gallery->image ) }}" alt=""
                                class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-nav">
                                    @foreach ($product_gallery as $gallery)
                                    <div><img src="{{ asset('gallery/'.$gallery->created_at->format('Y/m/'). $gallery->product_id .'/' . $gallery->image ) }}" alt=""
                                        class="img-fluid blur-up lazyload"></div>
                                    @endforeach
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
                            <h2>{{ $single_product->title }}</h2>
                            <div class="rating-section">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <h6>120 ratings</h6>
                            </div>
                            <form action="{{ route('AddToCart') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $single_product->id }}">
                                <div class="label-section">
                                    <span class="badge badge-grey-color">#1 Best seller</span>
                                    <span class="label-text">in {{ $single_product->categories->category_name }}</span>
                                </div>
                                {{-- <div class="priceadd">
                                    @foreach ($groupby as $price)
                                        <h3 class="price-detail getAttrPrice">${{ $price[0]->price }} .00<del>$459.00</del><span>55% off</span></h3>
                                    @endforeach
                                </div> --}}
                                <div class="priceadd">
                                    <h3 class="price-detail getAttrPrice">$45.00-$60.00<del>$459.00</del><span>55% off</span></h3>
                                </div>
                                <h6 class="product-title pb-2">Select Color</h6>
                                <ul class="color-variant coloradd" id="getColorToPrice">
                                    {{-- @foreach ($groupby as $color)
                                    <li class="color_id" value="{{ $color[0]->color_id }}" data-product="{{ $color[0]->product_id }}">{{ $color[0]->get_color->color_name }}</li>
                                    @endforeach --}}

                                    @foreach ($groupby as $color)
                                        <input type="radio" class="btn_check color_id" name="color_id"  value="{{ $color[0]->color_id }}" data-product="{{ $color[0]->product_id }}">
                                        <label class="btn btn_primary" class="bt_check" for="btn-check-2">{{ $color[0]->get_color->color_name }}</label>
                                    @endforeach
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
                                        <ul class="size-variant sizeadd" id="getSizeToPrice">
                                            {{-- @foreach ($groupby as $size)
                                                <li class="size_id" value="{{ $size[0]->size_id }}" data-product="{{ $size[0]->product_id }}"><input type="text" class="input_getsize" name="get_size" value="{{ $size[0]->get_size->size_name }}"></li>
                                            @endforeach --}}

                                            @foreach ($groupby as $size)
                                                    <input type="radio" class="btn_check size_id" id="" name="size_id" value="{{ $size[0]->size_id }}" data-product="{{ $size[0]->product_id }}">
                                                    <label class="btn btn_primary bt_check"  for="btn-check-2">{{ $size[0]->get_size->size_name }}</label>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <h6 class="product-title">quantity</h6>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-left-minus" data-type="minus" data-field=""><i class="ti-angle-left"></i></button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1">
                                            <span class="input-group-prepend">
                                                <button type="button" class="btn quantity-right-plus" data-type="plus" data-field=""><i class="ti-angle-right"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buttons"><button type="submit" id="cartEffect"
                                        class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1"
                                            aria-hidden="true"></i> add to cart</button> <a href="#" class="btn btn-solid"><i
                                            class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>wishlist</a></div>
                                <div class="product-count">
                            </form>
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
                            <div class="border-product">
                                <h6 class="product-title">100% secure payment</h6>
                                <img src="../assets/images/payment.png" class="img-fluid mt-1" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section ends -->


    <!-- product-tab starts -->
    <section class="tab-product m-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab"
                                href="#top-home" role="tab" aria-selected="true"><i
                                    class="icofont icofont-ui-home"></i>Details</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab"
                                href="#top-profile" role="tab" aria-selected="false"><i
                                    class="icofont icofont-man-in-glasses"></i>Specification</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab"
                                href="#top-contact" role="tab" aria-selected="false"><i
                                    class="icofont icofont-contacts"></i>Video</a>
                            <div class="material-border"></div>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="review-top-tab" data-bs-toggle="tab"
                                href="#top-review" role="tab" aria-selected="false"><i
                                    class="icofont icofont-contacts"></i>Write Review</a>
                            <div class="material-border"></div>
                        </li>
                    </ul>
                    <div class="tab-content nav-material" id="top-tabContent">
                        <div class="tab-pane fade show active" id="top-home" role="tabpanel"
                            aria-labelledby="top-home-tab">
                            <div class="product-tab-discription">
                                {{ $single_product->descripiton }}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                            <p>The Model is wearing a white blouse from our stylist's collection, see the image for a
                                mock-up of what the actual blouse would look like.it has text written on it in a black
                                cursive language which looks great on a white color.</p>
                            <div class="single-product-tables">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Sleeve Length</td>
                                            <td>Sleevless</td>
                                        </tr>
                                        <tr>
                                            <td>Neck</td>
                                            <td>Round Neck</td>
                                        </tr>
                                        <tr>
                                            <td>Occasion</td>
                                            <td>Sports</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Fabric</td>
                                            <td>Polyester</td>
                                        </tr>
                                        <tr>
                                            <td>Fit</td>
                                            <td>Regular Fit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                            <div class="">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/BUWzX78Ye_8"
                                    allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-review" role="tabpanel" aria-labelledby="review-top-tab">
                            <form class="theme-form">
                                <div class="form-row row">
                                    <div class="col-md-12">
                                        <div class="media">
                                            <label>Rating</label>
                                            <div class="media-body ms-3">
                                                <div class="rating three-star"><i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <input type="text" class="form-control" id="review"
                                            placeholder="Enter your Review Subjects" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="review">Review Title</label>
                                        <textarea class="form-control" placeholder="Wrire Your Testimonial Here"
                                            id="exampleFormControlTextarea1" rows="6"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-solid" type="submit">Submit YOur
                                            Review</button>
                                    </div>
                                </div>
                            </form>
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
@section('footer_js')
<style>
    .product-right .color-variant li {
        height: 30px;
        width: auto;
        cursor: pointer;
        border: 1px solid #cdcdcd;
        border-radius: 0px;
        padding: 3px 10px 0px 10px;
    }

    .btn_outline_primary {
        height: 30px;
        width: auto;
        margin-right: 10px;
        cursor: pointer;
        text-align: center;
        border: 1px solid #cdcecd;
        padding-bottom: 25px !important;
    }

    .product-right .size-box ul li {
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin-right: 10px;
        cursor: pointer;
        text-align: center;
        border: 1px solid #cdcecd;
        line-height: 31px;
    }

    input.btn_price {
    border: none;
    background: transparent;
    cursor: text !important;
}

input.input_getsize{
    border: none;
    background: transparent;
    text-align: center;
    max-width: 30px;
    border-radius: 50%;
    cursor: pointer;
}


.sizeadd label.bt_check{
    position: relative;
}

.sizeadd input.btn_check[type=radio] {
    position: absolute;
    cursor: pointer;
    width: 80px;
    height: 30px;
    background: transparent;
    opacity: 0.09;
}
.size-variant label.btn.btn_primary {
    height: 30px;
    width: auto;
    cursor: pointer;
    border: 1px solid #cdcdcd;
    border-radius: 0px;
    padding: 3px 10px 0px 10px;
    margin-right: 5px;
    z-index: -9999;
}

.sizeadd input.[type=radio]:before {
    content: "";
    display: block;
    position: absolute;
    width: 16px;
    height: 16px;
    top: 0;
    left: 0;
    border: 2px solid #555555;
    border-radius: 3px;
    background-color: white;
    /* opacity: 0; */}.sizeadd input.[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 5px;
    height: 10px;
    border: solid black;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 2px;
    left: 6px;
}

.color-variant input.color_id{
    position: relative;
}

.color-variant input.color_id[type=radio] {
    position: absolute;
    cursor: pointer;
    width: 80px;
    height: 30px;
    background: transparent;
    opacity: 0.09;
}
.color-variant label.btn_primary{
        height: 30px;
        width: auto;
        cursor: pointer;
        border: 1px solid #cdcdcd;
        border-radius: 0px;
        padding: 3px 10px 0px 10px;
        margin-right: 5px;
    }

    .color-variant input.color_id[type=radio]:before {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: 0;
        left: 0;
        border: 2px solid #555555;
        border-radius: 3px;
        background-color: white;
        opacity: 0;
}
.color-variant input.btn_check[type=checkbox]:checked:after {
    content: "";
    display: block;
    width: 5px;
    height: 10px;
    border: solid black;
    border-width: 0 2px 2px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
    position: absolute;
    top: 2px;
    left: 6px;
}

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        // $(".color_id").click(function(){
        //     let colorid = $(this).val();
        //     let productid = $(this).attr('data-product');
        //     // alert(productid);
        //     $.ajax({
        //         type:"GET",
        //         url:"{{ url('product/get/size') }}/" + colorid + '/' + productid,
        //         success:function(res) {
        //             $('.sizeadd').html(res)
        //         }
        //     });
        // });





    // });
    // </script>
    // <script>
    //     $(".size_id").click(function(){
    //         let sizeid = $(this).val();
    //         let productid = $(this).attr('data-product');
    //         // alert(productid);
    //         $.ajax({
    //             type:"GET",
    //             url:"{{ url('product/get/price') }}/" + sizeid + '/' + productid,
    //             success:function(res) {
    //                 $('.priceadd').html(res)
    //                 // console.log(res)
    //             }
    //         });
    //     });
// Color to Price showing
        // $('.color_id').click(function(){
        //     let color = $(this).val();
        //     let product_id = $(this).attr('data-product');

        //     $.ajax({
        //         type:"post",
        //         url:'/product/get/color/to/price',
        //         data:{color:color,product_id:product_id},
        //         success:function(res) {
        //             $('.getAttrPrice').html("$" + res + ".00");
        //             // alert(res);
        //         }

        //     });
        // })

// Size to Price showing
        // $('.size_id').click(function(){
        //     let size = $(this).val();
        //     let product_id = $(this).attr('data-product');

        //     $.ajax({
        //         type:"post",
        //         url:'/product/get/size/to/price',
        //         data:{size:size,product_id:product_id},
        //         success:function(res) {
        //             $('.getAttrPrice').html("$" + res + ".00");
        //             // alert(res);
        //         }

        //     });
        // })

// Color to Size showing
        // $('.color_id').click(function(){
        //     let color = $(this).val();
        //     let product_id = $(this).attr('data-product');

        //     $.ajax({
        //         type:"post",
        //         url:'/product/get/color/to/size',
        //         data:{color:color,product_id:product_id},
        //         success:function(res) {
        //             $('.size_id').html(res);
        //             // alert(res);
        //         }

        //     });
        // })

// Size to Color and Color to Price Start ===========
        $(".size_id").click(function(){
            let sizeid = $(this).val();
            let productid = $(this).attr('data-product');
            // alert(productid);
            $.ajax({
                type:"GET",
                url:"{{ url('product/get/size/wise/color') }}/" + sizeid + '/' + productid,
                success:function(res) {
                    $('.coloradd').html(res)
                    // console.log(res)
                    $('.color-variant input').on('click', function (e) {
                        $(".color-variant input").removeClass("active");
                        $(this).addClass("active");
                    });
                    $(".color_id").click(function(){
                        let colorid = $(this).val();
                        let productid = $(this).attr('data-product');
                        // alert(colorid);

                        $.ajax({
                            type:"get",
                            url: "{{ url('product/get/res/color/to/price') }}/" + colorid + '/' + productid,
                            success:function(res){
                                // alert(res);
                                $('.priceadd').html(res);
                            }
                        });
                    });

                }
            });
        });

// Color to Size and Size to Price Start ===========
        $('.color_id').click(function(){
            let colorid = $(this).val();
            let productid = $(this).attr('data-product');
            // alert(productid);
            $.ajax({
                type:"get",
                url: "{{ url('product/get/color/wise/size') }}/" + colorid + '/' + productid,
                success:function(res){
                // alert(res);
                $('.sizeadd').html(res);
                // $('.size-box ul li').on('click', function (e) {
                //     $(".size-box ul li").removeClass("active");
                //     $('#selectSize').removeClass('cartMove');
                //     $(this).addClass("active");
                //     $(this).parent().addClass('selected');
                // });
                $(".size_id").click(function(){
                    let size_id = $(this).val();
                    let product_id = $(this).attr('data-product');
                    // alert(size_id);
                    $.ajax({
                        type:"get",
                        url:"{{ url('product/get/size/wise/price') }}/" + size_id + '/' + product_id,
                        success:function(res){
                            // alert(res);
                            $('.priceadd').html(res);
                        }
                    });
                });

                }
            });
        });
    </script>
@endsection
