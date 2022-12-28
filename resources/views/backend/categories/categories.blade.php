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
                        <li class="active"><a href="" data-target="#category" class="btn btn-info mr-1" data-toggle="tab">All Category</a></li>
                        <li><a href="" data-target="#subcategory" class="btn btn-info mr-1" data-toggle="tab">Sub Category</a></li>
                        <li><a href="" data-target="#trushed" class="btn btn-info mr-1" data-toggle="tab">Trushed</a></li>
                    </ul>

                    <div class="tab-content hidden">
                        <div class="tab-pane active" id="category">
                          {{--========================= Categoy Add Modal Start Here =========================--}}
                          <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1" data-toggle="modal" data-target="#AddCategory">Add New Category</a>
                            <form action="{{ route('ExcelImport') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="excel">
                                <input type="submit" value="Excel Upload" class="btn btn-outline-info">
                            </form>
                          <div class="modal fade" id="AddCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Category</h5>
                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('CategoryStore') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <label class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">
                                            </div>
                                            </div><!-- row -->
                                            <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                              <textarea name="description" id="category_description" class="form-control" placeholder="Enter Category Descritpin"></textarea>
                                            </div>
                                            </div>
                                            <div class="row mg-t-20">
                                              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                              </div>
                                              </div>
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Add Ctegory</button>
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
                                <th class="wd-35p text-center">Category Name</th>
                                <th class="wd-35p text-center">Description</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($cat_list as $key=>$cat_lists)
                                <tr>
                                    <td class="wd-10p text -center">{{ $cat_list->firstItem() + $key }}</td>
                                    <td class="wd-35p text-center">{{ $cat_lists->category_name }}</td>
                                    <td class="wd-35p text-center">{{ $cat_lists->description }}</td>
                                    <td class="wd-20p text-center">{{ $cat_lists->slug ?? 'NA' }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#EditCategory{{ $cat_lists->id }}">Edit</a>
                                        <a href="{{ route('CategoryDelete', $cat_lists->id) }}" class="btn btn-danger">Delete</a>
                                        <div class="modal fade" id="EditCategory{{ $cat_lists->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                              <div class="modal-content p-3" style="width: 400px">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Add a New Category</h5>
                                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-layout form-layout-12">
                                                        <form action="{{ route('CategoryUpdate') }}" method="POST">
                                                            @csrf
                                                            <div class="row">
                                                                <input type="hidden" name="id" value="{{ $cat_lists->id }}">
                                                            <label class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <input type="text" name="category_name" class="form-control" value="{{ $cat_lists->category_name }}" placeholder="Enter Category Name">
                                                            </div>
                                                            </div><!-- row -->
                                                            <div class="row mg-t-20">
                                                            <label class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                              <textarea name="description" id="category_description" value="{{ $cat_lists->description }}" class="form-control" placeholder="Enter Category Descritpin">{{ $cat_lists->description }}</textarea>
                                                            </div>
                                                            </div>
                                                            <div class="row mg-t-20">
                                                              <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <input type="text"  value="{{ $cat_lists->slug }}" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                                              </div>
                                                              </div>
                                                            <div class="form-layout-footer mg-t-30 text-center">
                                                            <button class="btn btn-info" style="cursor: pointer;">Add Ctegory</button>
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
                            {{ $cat_list->links() }}
                          </table>
                          {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                        <div class="tab-pane" id="subcategory">
                            {{--========================= SubCategoy Add Modal Start Here =========================--}}
                            <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1" data-toggle="modal" data-target="#AddSubCategory">Add New SubCtegory</a>
                            <div class="modal fade" id="AddSubCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Sub-Category</h5>
                                    <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('SubCategoryStore') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <label class="col-sm-4 form-control-label">SubCategory: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="subcategory_name" class="form-control" placeholder="Enter SubCategory Name">
                                            </div>
                                            </div><!-- row -->
                                            <div class="row mg-t-20">
                                                <label class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                    <select name="category_id" id="category_id" class="form-control">
                                                        @foreach ($cat_list as $categories)
                                                        <option value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <textarea name="description" id="category_description" class="form-control" placeholder="Enter Category Descritpin"></textarea>
                                            </div>
                                            </div>
                                            <div class="row mg-t-20">
                                                <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                                                </div>
                                                </div>
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Add SubCtegory</button>
                                            </div><!-- form-layout-footer -->
                                        </form>
                                        </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            {{--========================= SubCategoy Add Modal Ends Here =========================--}}

                            {{--========================= SubCategoy Lists Start Here =========================--}}

                            <table class="table table-bordered table-colored table-info">
                            <thead>
                                <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">SubCategory Name</th>
                                <th class="wd-35p text-center">Category Name</th>
                                <th class="wd-35p text-center">Description</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subcat_list as $subcat)
                                <tr>
                                    <td class="wd-10p text -center">{{ $loop->index + 1 }}</td>
                                    <td class="wd-35p text-center">{{ $subcat->subcategory_name }}</td>
                                    <td class="wd-35p text-center">{{ $subcat->category->category_name }}</td>
                                    <td class="wd-35p text-center">{{ $subcat->description }}</td>
                                    <td class="wd-35p text-center">{{ $subcat->slug ?? 'NA' }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#EditSubCategory{{ $subcat->id }}">Edit</a>
                                        <a href="{{ route('SubCategoryDelete', $subcat->id) }}" class="btn btn-danger">Delete</a>
                                        <div class="modal fade" id="EditSubCategory{{ $subcat->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content p-3" style="width: 400px">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Add Sub-Category</h5>
                                                <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-layout form-layout-12">
                                                    <form action="{{ route('SubCategoryUpdate') }}" method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <input type="hidden" name="id" value="{{ $subcat->id }}">
                                                        <label class="col-sm-4 form-control-label">SubCategory: <span class="tx-danger">*</span></label>
                                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                            <input type="text" name="subcategory_name" value="{{ $subcat->subcategory_name }}" class="form-control" placeholder="Enter SubCategory Name">
                                                        </div>
                                                        </div><!-- row -->
                                                        <div class="row mg-t-20">
                                                            <label class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                                <select name="category_id" id="category_id" class="form-control">
                                                                    @foreach ($cat_list as $categories)
                                                                    <option @if($categories->id == $subcat->category_id) selected @endif value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mg-t-20">
                                                        <label class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
                                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                            <textarea name="description" id="category_description" class="form-control" placeholder="Enter Category Descritpin">{{ $subcat->description }}</textarea>
                                                        </div>
                                                        </div>
                                                        <div class="row mg-t-20">
                                                            <label class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
                                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                            <input type="text" name="slug" id="slug" value="{{ $subcat->slug }}" class="form-control" placeholder="Enter slug">
                                                            </div>
                                                            </div>
                                                        <div class="form-layout-footer mg-t-30 text-center">
                                                        <button class="btn btn-info" style="cursor: pointer;">Add SubCtegory</button>
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
                            </table>
                            {{--========================= SubCategoy List Ends Here =========================--}}
                        </div>
                        <div class="tab-pane" id="trushed">
                            {{--========================= Categoy Lists Start Here =========================--}}
                            <h5 class="text-center mt-5">Category Trushed</h5><hr>
                            <table class="table table-bordered table-colored table-info">
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
                                @foreach ($cat_trush as $key=>$trushed)
                                <tr>
                                    <td class="wd-10p text -center">{{ $loop->index + 1 }}</td>
                                    <td class="wd-35p text-center">{{ $trushed->category_name }}</td>
                                    <td class="wd-35p text-center">{{ $trushed->description }}</td>
                                    <td class="wd-20p text-center">{{ $trushed->slug }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="{{ route('CategoryRestore', $trushed->id) }}" class="btn btn-info mr-1">Restore</a>
                                        <a href="{{ route('CategoryPermanentDelete', $trushed->id) }}" class="btn btn-danger">Parmanent Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            <h5 class="text-center mt-5">SubCategory Trushed</h5><hr>
                            <table class="table table-bordered table-colored table-info">
                            <thead>
                                <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">SubCategory Name</th>
                                <th class="wd-35p text-center">Category Name</th>
                                <th class="wd-35p text-center">Description</th>
                                <th class="wd-20p text-center">Slug</th>
                                <th class="wd-20p text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($scat_trush as $subcat_trush)
                                <tr>
                                    <td class="wd-10p text-center">{{ $loop->index + 1 }}</td>
                                    <td class="wd-35p text-center">{{ $subcat_trush->subcategory_name }}</td>
                                    <td class="wd-35p text-center">{{ $subcat_trush->category_name }}</td>
                                    {{-- <td class="wd-35p text-center">{{ $subcat_trush->category->category_name }}</td> --}}
                                    <td class="wd-35p text-center">{{ $subcat_trush->description }}</td>
                                    <td class="wd-20p text-center">{{ $subcat_trush->slug }}</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="{{ route('SubCategoryRestore', $subcat_trush->id) }}" class="btn btn-info mr-1">Restore</a>
                                        <a href="{{ route('SubCategoryPermanentDelete', $subcat_trush->id) }}" class="btn btn-danger">Parmanent Delete</a>
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
