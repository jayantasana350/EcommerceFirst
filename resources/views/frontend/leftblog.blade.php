@extends('frontend.master')

@section('content')

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>blog</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!-- section start -->
    <section class="section-b-space blog-page ratio2_3">
        <div class="container">
            <div class="row">
                <!--Blog sidebar start-->
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="blog-sidebar">
                        <div class="theme-card">
                            <h4>Recent Blog</h4>
                            <ul class="recent-blog">
                                @foreach ($recentblog as $blog)
                                <li>
                                    <div class="media"><img class="img-fluid blur-up lazyload"
                                            src="{{ asset('images/thumbnail/' . $blog->created_at->format('Y/m/') . $blog->id . '/' . $blog->thumbnail) }}" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h6>25 Dec 2018</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="theme-card">
                            <h4>Popular Blog</h4>
                            <ul class="popular-blog">
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="blog-date"><span>03 </span><span>may</span></div>
                                        <div class="media-body align-self-center">
                                            <h6>Injected humour the like</h6>
                                            <p>0 hits</p>
                                        </div>
                                    </div>
                                    <p>it look like readable English. Many desktop publishing text.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Blog sidebar start-->
                <!--Blog List start-->
                <div class="col-xl-9 col-lg-8 col-md-7 order-sec">
                    @foreach ($blogs as $blog)
                    <div class="row blog-media">
                        <div class="col-xl-6">
                            <div class="blog-left">
                                <a href="#"><img src="{{ asset('images/thumbnail/' . $blog->created_at->format('Y/m/') . $blog->id . '/' . $blog->thumbnail) }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="blog-right">
                                <div>
                                    <h6> {{ $blog->created_at->format('d') }} {{ $blog->created_at->format('M') }} {{ $blog->created_at->format('Y') }} </h6><a href="#">
                                        <h4>{{ $blog->title}}</h4>
                                    </a>
                                    <ul class="post-social">
                                        <li>Posted By : {{ $blog->user->name }}</li>
                                        <li><i class="fa fa-heart"></i> 5 Hits</li>
                                        <li><i class="fa fa-comments"></i> 10 Comment</li>
                                    </ul>
                                    <p>{!! Str::limit($blog->summery, 190, '...') !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!--Blog List start-->
            </div>
        </div>
    </section>
    <!-- Section ends -->

@endsection
