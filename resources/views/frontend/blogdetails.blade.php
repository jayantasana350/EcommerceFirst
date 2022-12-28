@extends('frontend.master')

@section('content')
        <!-- breadcrumb start-->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="page-title">
                            <h2>blog details</h2>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <nav aria-label="breadcrumb" class="theme-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html">blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">blog deatils</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end-->


        <!--section start-->
        <section class="blog-detail-page section-b-space ratio2_3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 blog-detail"><img src="{{ asset('images/thumbnail/' . $blogss->created_at->format('Y/m/') . $blogss->id . '/' . $blogss->thumbnail) }}"
                            class="img-fluid blur-up lazyload" alt="">
                        <h3>{{ $blogss->title }}</h3>
                        <ul class="post-social">
                            <li>{{ $blogss->created_at->format('d') }} {{ $blogss->created_at->format('M') }} {{ $blogss->created_at->format('Y') }}</li>
                            <li>Posted By : {{ $blogss->user->name }}</li>
                            <li><i class="fa fa-heart"></i> 5 Hits</li>
                            <li><i class="fa fa-comments"></i> 10 Comment</li>
                        </ul>
                        <p>{!! $blogss->summery !!}</p>
                        {{-- <p>Cras quis neque urna. Pellentesque mollis, dui nec elementum elementum, ipsum quam suscipit
                            ligula, sit amet lobortis dolor sem sed neque. Vivamus consequat est non sodales efficitur.
                            Aliquam sodales eleifend sodales. Aliquam auctor ipsum quis nisl facilisis, at convallis mauris
                            iaculis. Duis eleifend, magna ac convallis blandit, dui dui auctor leo, sed tincidunt nisi
                            mauris ut nulla. Praesent porttitor dui ac turpis commodo porttitor. Integer ligula nisi,
                            bibendum non sem at, porta condimentum dui.</p>
                        <p>Proin id eleifend diam, euismod dictum nibh. Ut ullamcorper in purus at tempor. Nullam mattis
                            risus nec velit semper lobortis. Donec accumsan ligula fermentum, ultricies massa eget, cursus
                            leo. Suspendisse placerat elit et lacus aliquam, ut elementum leo aliquet. Integer ornare, ipsum
                            eu lacinia viverra, lectus ipsum scelerisque nisl, nec iaculis leo elit id arcu. Aliquam id ante
                            elit. Donec commodo purus eget lacus pharetra, et egestas metus blandit. Quisque pellentesque
                            porta urna, sed dictum enim viverra a.</p> --}}
                    </div>
                </div>
                <div class="row section-b-space blog-advance">
                    <div class="col-lg-6">
                        <div><img src="../assets/images/blog/1.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div><img src="../assets/images/blog/2.jpg" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li>Donec ut metus sit amet elit consectetur facilisis id vel turpis.</li>
                            <li>Aenean in mi eu elit mollis tincidunt.</li>
                            <li>Etiam blandit metus vitae purus lacinia ultricies.</li>
                            <li>Nunc quis nulla sagittis, faucibus neque a, tempus metus.</li>
                            <li>In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                            <li>Morbi molestie lacus blandit interdum sodales.</li>
                            <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                            <li>Vestibulum fringilla tortor et lorem sagittis,</li>
                            <li>In scelerisque libero ut mi ornare, a porttitor neque pulvinar.</li>
                            <li>Morbi molestie lacus blandit interdum sodales.</li>
                            <li>Curabitur eleifend velit molestie eleifend interdum.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <p>Nulla quam turpis, commodo et placerat eu, mollis ut odio. Donec pellentesque egestas consequat.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc at
                            urna dolor. Mauris odio nisi, rhoncus ac justo eget, lacinia iaculis lectus. Pellentesque id
                            dapibus justo. Nunc venenatis non odio sed luctus. Etiam sit amet elit massa.</p>
                        <p>Phasellus quis lorem eros. Aliquam non tincidunt nibh. Nulla quis interdum neque. Mauris volutpat
                            neque eu nunc ornare ullamcorper. Sed neque velit, lobortis eget tellus in, pellentesque ornare
                            nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                            Maecenas rutrum nisi non nibh egestas lacinia. Cras ut tellus sit amet lacus consequat dictum
                            nec id sapien. Ut pellentesque ac ex ut elementum. Morbi mollis volutpat neque eu volutpat.</p>
                        <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis fringilla
                            bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer faucibus enim nec ullamcorper
                            tempor. Aenean nec felis dui. Integer tristique odio mi, in volutpat metus posuere eu. Aenean
                            suscipit ipsum nunc, id volutpat lorem hendrerit ac. Sed id elit quam. In ac mauris arcu.
                            Praesent eget lectus sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec
                            facilisis erat tempor quis. Vestibulum eu vestibulum ex. Maecenas luctus orci sed blandit
                            fermentum. In vulputate eu metus a faucibus. Suspendisse feugiat condimentum congue.</p>
                    </div>
                </div>
                <div class="row section-b-space">
                    <div class="col-sm-12">
                        <ul class="comment-section">
                            <li>
                                <div class="media"><img src="../assets/images/avtar.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                        <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                            fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                            faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                            odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                            lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                            sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                            erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img src="../assets/images/2.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                        <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                            fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                            faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                            odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                            lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                            sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                            erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media"><img src="../assets/images/20.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h6>Mark Jecno <span>( 12 Jannuary 2018 at 1:30AM )</span></h6>
                                        <p>Donec rhoncus massa quis nibh imperdiet dictum. Vestibulum id est sit amet felis
                                            fringilla bibendum at at leo. Proin molestie ac nisi eu laoreet. Integer
                                            faucibus enim nec ullamcorper tempor. Aenean nec felis dui. Integer tristique
                                            odio mi, in volutpat metus posuere eu. Aenean suscipit ipsum nunc, id volutpat
                                            lorem hendrerit ac. Sed id elit quam. In ac mauris arcu. Praesent eget lectus
                                            sit amet diam vestibulum varius. Suspendisse dignissim mattis leo, nec facilisis
                                            erat tempor quis. Vestibulum eu vestibulum ex.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row blog-contact">
                    <div class="col-sm-12">
                        <h2>Leave Your Comment</h2>
                        <form class="theme-form">
                            <div class="form-row row">
                                <div class="col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Your name"
                                        required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleFormControlTextarea1">Comment</label>
                                    <textarea class="form-control" placeholder="Write Your Comment"
                                        id="exampleFormControlTextarea1" rows="6"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-solid" type="submit">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--Section ends-->
@endsection
