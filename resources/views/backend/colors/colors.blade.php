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
                        <li class="active"><a href="" data-target="#category" class="btn btn-info mr-1" data-toggle="tab">All Colors</a></li>
                        <li><a href="" data-target="#trushed" class="btn btn-info mr-1" data-toggle="tab">Trushed</a></li>
                    </ul>

                    <div class="tab-content hidden">
                        <div class="tab-pane active" id="category">
                          {{--========================= Categoy Add Modal Start Here =========================--}}
                          <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1" data-toggle="modal" data-target="#AddColor">Add New Color</a>
                          <div class="modal fade" id="AddColor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Color</h5>
                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('ColorStore') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <label class="col-sm-4 form-control-label">Color Name: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="color_name" class="form-control" placeholder="Enter Color Name">
                                            </div>
                                            </div><!-- row -->
                                            <div class="row mg-t-20">
                                              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                              </div>
                                              </div>
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Add Color</button>
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
                                <th class="wd-35p text-center">Color Name</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($color_list as $key=>$colors)
                                <tr>
                                    <td class="wd-10p text -center">{{ $color_list->firstItem() + $key }}</td>
                                    <td class="wd-35p text-center">{{ $colors->color_name }}</td>
                                    <td class="wd-35p text-center">{{ $colors->slug }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#EditColor{{ $colors->id }}">Edit</a>
                                        <a href="{{ route('ColorDelete', $colors->id) }}" class="btn btn-danger">Delete</a>
                                        <div class="modal fade" id="EditColor{{ $colors->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content p-3" style="width: 400px">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Color</h5>
                                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-layout form-layout-12">
                                                        <form action="{{ route('ColorUpdate') }}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <input type="hidden" name="id" value="{{ $colors->id }}">
                                                            <label class="col-sm-4 form-control-label">Color Name: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <input type="text" name="color_name" class="form-control" value="{{ $colors->color_name }}" placeholder="Enter Color Name">
                                                            </div>
                                                            </div><!-- row -->
                                                            <div class="row mg-t-20">
                                                              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <input type="text"  value="{{ $colors->slug }}" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                                              </div>
                                                              </div>
                                                            <div class="form-layout-footer mg-t-30 text-center">
                                                            <button class="btn btn-info" style="cursor: pointer;">Update Color</button>
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
                            {{ $color_list->links() }}
                          </table>
                          {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                        <div class="tab-pane" id="trushed">
                            {{--========================= Categoy Lists Start Here =========================--}}
                            <table class="table table-bordered table-colored table-info mt-5">
                            <thead>
                                <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">Category Name</th>
                                <th class="wd-35p text-center">Description</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trushed as $key=>$t_color)
                                <tr>
                                    <td class="wd-10p text -center">{{ $loop->index + 1 }}</td>
                                    <td class="wd-35p text-center">{{ $t_color->color_name }}</td>
                                    <td class="wd-35p text-center">{{ $t_color->slug }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="{{ route('ColorRestore', $t_color->id) }}" class="btn btn-info mr-1">Restore</a>
                                        <a href="{{ route('ColorParmanentDelete', $t_color->id) }}" class="btn btn-danger">Parmanent Delete</a>
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
