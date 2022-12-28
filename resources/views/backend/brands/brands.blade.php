@extends('backend.master')
@section('category')
 show-sub active
@endsection

@section('subcat')
active
@endsection
@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">

        <div class="container hidden">
            <ul  class="nav nav-pills">
                        <li class="active"><a href="" data-target="#category" class="btn btn-info mr-1" data-toggle="tab">All Brands</a></li>
                        <li><a href="" data-target="#trushed" class="btn btn-info mr-1" data-toggle="tab">Trushed</a></li>
                    </ul>

                    <div class="tab-content hidden">
                        <div class="tab-pane active" id="category">
                          {{--========================= Categoy Add Modal Start Here =========================--}}
                          <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1" data-toggle="modal" data-target="#AddBrand">Add New Brand</a>
                          <div class="modal fade" id="AddBrand" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Brand</h5>
                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('BrandStore') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <label class="col-sm-4 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="brand_name" class="form-control" placeholder="Enter Brand Name">
                                            </div>
                                            </div><!-- row -->
                                            <div class="row mg-t-20">
                                              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                              </div>
                                              </div>
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Add Brand</button>
                                            </div><!-- form-layout-footer -->
                                        </form>
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{--========================= Categoy Add Modal Ends Here =========================--}}

                          {{--========================= Categoy Lists Start Here =========================--}}

                          <table class="table table-bordered table-colored table-info">
                            <thead>
                              <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">Brand Name</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($brand_list as $key=>$brands)
                                <tr>
                                    <td class="wd-10p text -center">{{ $brand_list->firstItem()+$key }}</td>
                                    <td class="wd-35p text-center">{{ $brands->brand_name }}</td>
                                    <td class="wd-35p text-center">{{ $brands->slug }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#EditBrand{{ $brands->id }}">Edit</a>
                                        <a href="{{ route('BrandDelete', $brands->id) }}" class="btn btn-danger">Delete</a>
                                        <div class="modal fade" id="EditBrand{{ $brands->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content p-3" style="width: 400px">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Size</h5>
                                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-layout form-layout-12">
                                                        <form action="{{ route('BrandUpdate') }}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <input type="hidden" name="id" value="{{ $brands->id }}">
                                                            <label class="col-sm-4 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <input type="text" name="brand_name" class="form-control" value="{{ $brands->brand_name }}">
                                                            </div>
                                                            </div><!-- row -->
                                                            <div class="row mg-t-20">
                                                              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <input type="text"  value="{{ $brands->slug }}" name="slug" id="slug" class="form-control">
                                                              </div>
                                                              </div>
                                                            <div class="form-layout-footer mg-t-30 text-center">
                                                            <button class="btn btn-info" style="cursor: pointer;">Update Brand</button>
                                                            </div><!-- form-layout-footer -->
                                                        </form>
                                                      </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            {{ $brand_list->links() }}
                          </table>
                          {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                        <div class="tab-pane" id="trushed">
                            {{--========================= Categoy Lists Start Here =========================--}}
                            <table class="table table-bordered table-colored table-info mt-5">
                            <thead>
                                <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">Size Name</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brand_trush as $key=>$trushed)
                                <tr>
                                    <td class="wd-10p text -center">{{ $loop->index + 1 }}</td>
                                    <td class="wd-35p text-center">{{ $trushed->brand_name }}</td>
                                    <td class="wd-35p text-center">{{ $trushed->slug }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="{{ route('BrandRestore', $trushed->id) }}" class="btn btn-info mr-1">Restore</a>
                                        <a href="{{ route('BrandPermanentDelete', $trushed->id) }}" class="btn btn-danger">Parmanent Delete</a>
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
        @if(session('BrandStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Brand Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('BrandUpdate'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Brand Update Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('BrandDelete'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Brand Delete Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('BrandRestore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Brand Restore Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('BrandPermanentDelete'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Brand Permanent Delete Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
    </script>


@endsection
