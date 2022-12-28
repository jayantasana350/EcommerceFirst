@extends('backend.master')
@section('product')
 show-sub active
@endsection
@section('productlist')
active
@endsection
@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">

        <div class="container hidden">
            <ul  class="nav nav-pills">
                        <li class="active"><a href="" data-target="#category" class="btn btn-info mr-1" data-toggle="tab">All Products</a></li>
                        <li><a href="" data-target="#trushed" class="btn btn-info mr-1" data-toggle="tab">Trushed</a></li>
                    </ul>

                    <div class="tab-content hidden">
                        <div class="tab-pane active" id="category">
                          <a href="{{ route('AddProducts') }}" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1">Add a New Product</a>
                          {{--========================= Categoy Lists Start Here =========================--}}

                          <table class="table table-bordered table-colored table-info">
                            <thead>
                              <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">Thumbnail</th>
                                <th class="wd-35p text-center">SKU</th>
                                <th class="wd-35p text-center">Title</th>
                                <th class="wd-20p text-center">Price</th>
                                <th class="wd-20p text-center">Quantity</th>
                                <th class="wd-20p text-center">Images</th>
                                <th class="wd-20p text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                <tr>
                                    <td class="wd-10p text -center">{{ $loop->index+1 }}</td>
                                    <td class="wd-35p text-center"><img src="{{ asset('images/' . $product->thumbnail) }}" alt="" style="width: 50px;"></td>
                                    <td class="wd-35p text-center">{{ $product->sku }}</td>
                                    <td class="wd-35p text-center">{{ $product->title }}</td>

                                    <td class="wd-35p text-center" >
                                        @foreach ($attribute as $prices)
                                        <span>
                                            @if ($product->id == $prices->product_id)
                                            {{ $prices->price }}
                                            @endif
                                        </span>
                                        @endforeach
                                    </td>
                                    <td class="wd-20p text-center">
                                        @foreach ($attribute as $quantity)
                                        <span>
                                            @if ($product->id == $quantity->product_id)
                                            <span>{{ $quantity->quantity }}</span><br>
                                            @endif
                                        </span>
                                        @endforeach
                                    </td>
                                    <td class="wd-20p text-center">
                                        @foreach ($productgallery as $gallery)
                                        <span>
                                            @if ($product->id == $gallery->product_id)
                                            <img src="{{ asset('gallery/'.$gallery->created_at->format('Y/m/'). $gallery->product_id .'/' . $gallery->image ) }}" alt="image" width="50" height="50">
                                            @endif
                                        </span>
                                        @endforeach
                                    </td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="{{ route('ProductEdit', $product->id) }}" class="btn btn-info mr-1">Edit</a>
                                        <a href="{{ route('ProductGalleryEdit', $product->id) }}" class="btn btn-info mr-1">Gallery</a>
                                        <a href="{{ route('ProductDelete', $product->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            {{ $products->links() }}
                          </table>
                          {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                        <div class="tab-pane" id="trushed">
                            {{--========================= Categoy Lists Start Here =========================--}}
                            <h5 class="text-center mt-5">Category Trushed</h5><hr>
                            <table class="table table-bordered table-colored table-info">
                            <thead>
                                <tr>
                                    <th class="wd-10p text-center">SL</th>
                                    <th class="wd-35p text-center">Image</th>
                                    <th class="wd-35p text-center">SKU</th>
                                    <th class="wd-35p text-center">Title</th>
                                    <th class="wd-20p text-center">Price</th>
                                    <th class="wd-20p text-center">Quantity</th>
                                    <th class="wd-20p text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product_trushed  as $key => $product_trush)
                                <tr>
                                    <td class="wd-10p text -center">{{ $loop->index+1 }}</td>
                                    <td class="wd-35p text-center"><img src="{{ asset('images/' . $product_trush->thumbnail) }}" alt="" style="width: 50px;"></td>
                                    <td class="wd-35p text-center">{{ $product_trush->sku }}</td>
                                    <td class="wd-35p text-center">{{ $product_trush->title }}</td>
                                    <td class="wd-35p text-center">
                                        @foreach ($attr_trush as $prices)
                                        <span>
                                            @if ($product_trush->id == $prices->product_id)
                                            {{ $prices->price }}
                                            @endif
                                        </span>
                                        @endforeach
                                    </td>
                                    <td class="wd-20p text-center">
                                        @foreach ($attr_trush as $quantity)
                                        <span>
                                            @if ($product_trush->id == $quantity->product_id)
                                            <span>{{ $quantity->quantity }}</span><br>
                                            @endif
                                        </span>
                                        @endforeach
                                    </td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="{{ route('ProductRestore', $product_trush->id) }}" class="btn btn-info mr-1">Restore</a>
                                        <a href="{{ route('ProductPermanentDelete', $product_trush->id) }}" class="btn btn-danger">Permanent Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                    </div>
              </div>




    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->

@endsection
@section('tabs_js')
<script>

    $(function() {
          var lastTab = localStorage.getItem('lastTab');
          $('.container, .tab-content').removeClass('hidden');
          if (lastTab) {
              $('[data-target="' + lastTab + '"]').tab('show');
          }
          $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
              localStorage.setItem('lastTab', $(this).data('target'));
          });
      });
</script>
@endsection
@section('footer_js')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        @if(session('CategoryStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Category Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('CategoryUpdate'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Category Update Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
    </script>


@endsection
