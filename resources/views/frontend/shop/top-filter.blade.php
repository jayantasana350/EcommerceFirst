@extends('frontend.master')

@section('content')
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>collection</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">collection</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->


    <!-- section start -->
    <section class="section-b-space ratio_asos">
        <div class="collection-wrapper">
            <div class="container">
                <div class="row">
                    <div class="collection-content col">
                        <div class="page-main-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="top-banner-wrapper">
                                        <a href="#"><img src="../assets/images/mega-menu/2.jpg"
                                                class="img-fluid blur-up lazyload" alt=""></a>
                                        <div class="top-banner-content small-section">
                                            <h4>BIGGEST DEALS ON TOP BRANDS</h4>
                                            <p>The trick to choosing the best wear for yourself is to keep in mind your
                                                body type, individual style, occasion and also the time of day or
                                                weather.
                                                In addition to eye-catching products from top brands, we also offer an
                                                easy 30-day return and exchange policy, free and fast shipping across
                                                all pin codes, cash or card on delivery option, deals and discounts,
                                                among other perks. So, sign up now and shop for westarn wear to your
                                                heart???s content on Multikart. </p>
                                        </div>
                                    </div>
                                    <div class="collection-product-wrapper">
                                        <div class="product-top-filter">
                                            <div class="container-fluid p-0">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="product-filter-content">
                                                            <div class="search-count">
                                                                <h5 class="filter-bottom-title">filter-panel<h5>
                                                            </div>
                                                            <div class="collection-view">
                                                                <ul>
                                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                                    <li><i class="fa fa-list-ul list-layout-view"></i>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="collection-grid-view">
                                                                <ul>
                                                                    <li><img src="../assets/images/icon/2.png" alt=""
                                                                            class="product-2-layout-view"></li>
                                                                    <li><img src="../assets/images/icon/3.png" alt=""
                                                                            class="product-3-layout-view"></li>
                                                                    <li><img src="../assets/images/icon/4.png" alt=""
                                                                            class="product-4-layout-view"></li>
                                                                    <li><img src="../assets/images/icon/6.png" alt=""
                                                                            class="product-6-layout-view"></li>
                                                                </ul>
                                                            </div>
                                                            <div class="product-page-per-view">
                                                                <select>
                                                                    <option value="High to low">24 Products Par Page
                                                                    </option>
                                                                    <option value="Low to High">50 Products Par Page
                                                                    </option>
                                                                    <option value="Low to High">100 Products Par Page
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="product-page-filter">
                                                                <select>
                                                                    <option value="High to low">Sorting items</option>
                                                                    <option value="Low to High">50 Products</option>
                                                                    <option value="Low to High">100 Products</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="collection-filter container-fluid top-filter filter-bottom-content">
                                                            <!-- side-bar colleps block stat -->
                                                            <div class="collection-filter-block row m-0">
                                                                <!-- brand filter start -->
                                                                <div class="collection-mobile-back col-12"><span
                                                                        class="filter-back"><i class="fa fa-angle-left"
                                                                            aria-hidden="true"></i> back</span></div>
                                                                <div class="collection-collapse-block open col-lg-3">
                                                                    <h3 class="collapse-block-title">brand</h3>
                                                                    <div class="collection-collapse-block-content">
                                                                        <div class="collection-brand-filter">
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" id="zara">
                                                                                <label class="form-check-label"
                                                                                    for="zara">zara</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="vera-moda">
                                                                                <label class="form-check-label"
                                                                                    for="vera-moda">vera-moda</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="forever-21">
                                                                                <label class="form-check-label"
                                                                                    for="forever-21">forever-21</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="roadster">
                                                                                <label class="form-check-label"
                                                                                    for="roadster">roadster</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input" id="only">
                                                                                <label class="form-check-label"
                                                                                    for="only">only</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- color filter start here -->
                                                                <div class="collection-collapse-block open col-lg-3">
                                                                    <h3 class="collapse-block-title">colors</h3>
                                                                    <div class="collection-collapse-block-content">
                                                                        <div class="color-w-name">
                                                                            <ul class="row">
                                                                                <li class="active col-12"><span
                                                                                        class="color-1"></span>white
                                                                                </li>
                                                                                <li class="col-12"><span
                                                                                        class="color-2"></span>grey</li>
                                                                                <li class="col-12"><span
                                                                                        class="color-3"></span>red</li>
                                                                                <li class="col-12"><span
                                                                                        class="color-4"></span>purple
                                                                                </li>
                                                                                <li class="col-12"><span
                                                                                        class="color-5"></span>blue</li>
                                                                                <li class="col-12"><span
                                                                                        class="color-6"></span>yellow
                                                                                </li>
                                                                                <li class="col-12"><span
                                                                                        class="color-7"></span>green
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- size filter start here -->
                                                                <div
                                                                    class="collection-collapse-block border-0 open col-lg-3">
                                                                    <h3 class="collapse-block-title">size</h3>
                                                                    <div class="collection-collapse-block-content">
                                                                        <div class="collection-brand-filter">
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="hundred">
                                                                                <label class="form-check-label"
                                                                                    for="hundred">s</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="twohundred">
                                                                                <label class="form-check-label"
                                                                                    for="twohundred">m</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="threehundred">
                                                                                <label class="form-check-label"
                                                                                    for="threehundred">l</label>
                                                                            </div>
                                                                            <div
                                                                                class="form-check collection-filter-checkbox">
                                                                                <input type="checkbox"
                                                                                    class="form-check-input"
                                                                                    id="fourhundred">
                                                                                <label class="form-check-label"
                                                                                    for="fourhundred">xl</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- price filter start here -->
                                                                <div
                                                                    class="collection-collapse-block border-0 open col-lg-3">
                                                                    <h3 class="collapse-block-title">price</h3>
                                                                    <div class="collection-collapse-block-content">
                                                                        <div class="wrapper mt-3">
                                                                            <div class="range-slider">
                                                                                <input type="text"
                                                                                    class="js-range-slider" value="" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="text-end button_bottom">
                                                                        <a href="javascript:void(0)"
                                                                            class="btn btn-solid btn-xs me-2">apply</a>
                                                                        <a href="javascript:void(0)"
                                                                            class="btn btn-solid btn-xs close-filter-bottom">close
                                                                            filter</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- silde-bar colleps block end here -->
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper-grid">
                                            <div class="row margin-res">
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/35.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/36.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div>
                                                                <div class="rating"><i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i></div>
                                                                <a href="product-page(no-sidebar).html">
                                                                    <h6>Slim Fit Cotton Shirt</h6>
                                                                </a>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and
                                                                    typesetting industry. Lorem Ipsum has been the
                                                                    industry's standard dummy text ever since the 1500s,
                                                                    when an unknown printer took a galley
                                                                    of type and scrambled it to make a type specimen
                                                                    book</p>
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
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/27.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/28.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/1.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/2.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/33.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/34.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/27.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/28.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/35.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/36.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/27.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/28.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/1.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/2.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/27.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/28.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/1.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/2.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/33.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/34.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
                                                            <h4>$500.00</h4>
                                                            <ul class="color-variant">
                                                                <li class="bg-light0"></li>
                                                                <li class="bg-light1"></li>
                                                                <li class="bg-light2"></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-3 col-6 col-grid-box">
                                                    <div class="product-box">
                                                        <div class="img-wrapper">
                                                            <div class="front">
                                                                <a href="#"><img src="../assets/images/pro3/1.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="back">
                                                                <a href="#"><img src="../assets/images/pro3/2.jpg"
                                                                        class="img-fluid blur-up lazyload bg-img"
                                                                        alt=""></a>
                                                            </div>
                                                            <div class="cart-info cart-wrap">
                                                                <button data-bs-toggle="modal"
                                                                    data-bs-target="#addtocart" title="Add to cart"><i
                                                                        class="ti-shopping-cart"></i></button> <a
                                                                    href="javascript:void(0)" title="Add to Wishlist"><i
                                                                        class="ti-heart" aria-hidden="true"></i></a> <a
                                                                    href="#" data-bs-toggle="modal"
                                                                    data-bs-target="#quick-view" title="Quick View"><i
                                                                        class="ti-search" aria-hidden="true"></i></a> <a
                                                                    href="compare.html" title="Compare"><i
                                                                        class="ti-reload" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-detail">
                                                            <div class="rating"><i class="fa fa-star"></i> <i
                                                                    class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            </div>
                                                            <a href="product-page(no-sidebar).html">
                                                                <h6>Slim Fit Cotton Shirt</h6>
                                                            </a>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the
                                                                industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley
                                                                of type and scrambled it to make a type specimen book
                                                            </p>
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
                                        <div class="product-pagination">
                                            <div class="theme-paggination-block">
                                                <div class="container-fluid p-0">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <nav aria-label="Page navigation">
                                                                <ul class="pagination">
                                                                    <li class="page-item"><a class="page-link" href="#"
                                                                            aria-label="Previous"><span
                                                                                aria-hidden="true"><i
                                                                                    class="fa fa-chevron-left"
                                                                                    aria-hidden="true"></i></span> <span
                                                                                class="sr-only">Previous</span></a></li>
                                                                    <li class="page-item active"><a class="page-link"
                                                                            href="#">1</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">2</a></li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item"><a class="page-link" href="#"
                                                                            aria-label="Next"><span
                                                                                aria-hidden="true"><i
                                                                                    class="fa fa-chevron-right"
                                                                                    aria-hidden="true"></i></span> <span
                                                                                class="sr-only">Next</span></a></li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                                            <div class="product-search-count-bottom">
                                                                <h5>Showing Products 1-24 of 10 Result</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- section End -->
@endsection
