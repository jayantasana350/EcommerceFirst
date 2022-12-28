@extends('backend.master')

@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="form-layout form-layout-1">
        <form action="{{ route('ProductUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mg-b-25">
                <input type="hidden" name="id" value="{{ $products->id }}">
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Product Title: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="title" value="{{ $products->title }}" >
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                    <label class="form-control-label">Product SKU: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="sku" value="{{ $products->sku }}">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" name="brand_id" data-placeholder="Choose country">
                        <option label="Choose Brand"></option>
                        @foreach ($brand as $brands)
                        <option @if($brands->id == $products->brand_id) selected @endif value="{{ $brands->id }}">{{ $brands->brand_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group">
                    <label class="form-control-label">Manufecturer: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" name="manufecturer" value="{{ $products->manufecturer }}">
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" name="category_id" data-placeholder="Choose Category">
                        <option label="Choose Category"></option>
                        @foreach ($category as $categories)
                        <option @if($categories->id == $products->category_id) selected @endif value="{{ $categories->id }}">{{ $categories->category_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                    <div class="form-group mg-b-10-force">
                    <label class="form-control-label">SubCategory: <span class="tx-danger">*</span></label>
                    <select class="form-control select2" name="subcategory_id" data-placeholder="Choose Sub-Category">
                        <option label="Choose Sub-Category"></option>
                        @foreach ($subcategory as $sub_cat)
                        <option @if($sub_cat->id == $products->subcategory_id) selected @endif value="{{ $sub_cat->id }}">{{ $sub_cat->subcategory_name }}</option>
                        @endforeach
                    </select>
                    </div>
                </div><!-- col-4 -->
                <table class="table-editable mg-t-20">
                    <tbody>
                        @foreach ($attribute as $attributes)
                        <input type="hidden" name="product_id[]" value="{{ $products->id }}">
                        @if ($products->id == $attributes->product_id)


                        <tr class="d-flex">
                            <td class="col-lg-5">
                                <div class="form-group">
                                <label class="form-control-label">Product Id: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" name="product_upc[]" value="{{ $attributes->product_upc }}">
                                </div>
                            </td><!-- col-4 -->
                            <td class="col-lg-5">
                                <div class="form-group">
                                <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="price[]" value="{{ $attributes->price }}">
                                </div>
                            </td><!-- col-4 -->
                            <td class="col-lg-6">
                                <div class="form-group">
                                <label class="form-control-label">Quantity: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="quantity[]" value="{{ $attributes->quantity }}">
                                </div>
                            </td><!-- col-4 -->
                            <td rowspan="2" class="table-controls table-zapper">
                                <button class="btnDeleteRow btn-zap" type="button" disabled>&times;</a>
                            </td>
                        </tr>

                        <tr class="d-flex">
                                <td class="col-lg-8">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Color: <span class="tx-danger">*</span></label>
                                        <select class="form-control select2" name="color_id[]" data-placeholder="Choose Color">
                                            <option label="Choose Color"></option>
                                            @foreach ($colors as $color)
                                            <option @if($color->id == $attributes->color_id) selected @endif value="{{ $color->id }}">{{ $color->color_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td><!-- col-4 -->
                                <td class="col-lg-8">
                                    <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Size: <span class="tx-danger">*</span></label>
                                    <select class="form-control select2" name="size_id[]" data-placeholder="Choose Size">
                                        <option label="Choose Size"></option>
                                        @foreach ($sizes as $size)
                                        <option @if($size->id == $attributes->size_id) selected @endif value="{{ $size->id }}">{{ $size->size_name }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </td><!-- col-4 -->
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3">
                            <button type="button" class="btnAddRow btn btn-outline-info btn-sm" style="cursor: pointer">Add Multiple Color Sizes</button>
                            </td>
                        </tr>
                        </tfoot>
                </table>
            <div class="col-lg-12 mg-t-20">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Summery: <span class="tx-danger">*</span></label>
                <textarea class="form-control" name="summery" id="summery" rows="5">{{ $products->summery }}</textarea>
                </div>
            </div><!-- col-12 -->
            <div class="col-lg-12 mg-t-20">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Descritpion: <span class="tx-danger">*</span></label>
                <textarea class="form-control" name="descripiton" id="" rows="10">{{ $products->descripiton }}</textarea>
                </div>
            </div><!-- col-12 -->
            <div class="col-lg-12 mg-t-20">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Thumbnail Image: <span class="tx-danger">*</span></label>
                <input class="form-control" type="file" name="thumbnail">
                </div>
            </div><!-- col-12 -->
            <div class="col-lg-12 mg-t-20">
                <div class="form-group mg-b-10-force">
                <label class="form-control-label">Images: <span class="tx-danger">*</span></label>
                <input type="file" class="form-control" name="image[]" id="image" multiple="multiple">
                </div>
            </div><!-- col-12 -->
            </div><!-- row -->
            <div class="form-layout-footer text-center">
            <button type="submit" class="btn btn-info" style="cursor: pointer">Add Product</button>
            </div><!-- form-layout-footer -->
        </form>
      </div><!-- form-layout -->
    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
@endsection

@section('variation')

<style>
    .btn-zap:disabled {
  background:; color:rgb(226, 11, 11);
  opacity:.5;
  cursor:default;
}

td.table-controls.table-zapper {
    margin-top: 30px;
}

button.btnDeleteRow.btn-zap {
    color: red;
    font-weight: bold;
}
</style>
  <script>
      //delete row
$(".btnDeleteRow").click(function() {
  var rowCount = $(this).closest('table').find('tbody').length;
  if (rowCount > 1) {
    $(this).closest('tbody').remove();
  }
  rowCount --;
  if (rowCount <= 1) {
    $(document).find('.btnDeleteRow').prop('disabled', true);
  }
});

//add row
$(".btnAddRow").click(function() {
  var table = $(this).closest('table');
  var lastRow = table.find('tbody').last();
  var newRow = lastRow.clone(true, true);
  newRow.find('input, select').val('');

  newRow.insertAfter(lastRow);
  table.find('.btnDeleteRow').removeAttr("disabled");
});



// growTextarea function: use for testing that the the javascript
// is also copied when row is cloned.  to confirm,
// type several lines into Location, add a row, & repeat

function growTextarea (i,elem) {
    var elem = $(elem);
    var resizeTextarea = function( elem ) {
        var scrollLeft = window.pageXOffset || (document.documentElement || document.body.parentNode || document.body).scrollLeft;
        var scrollTop  = window.pageYOffset || (document.documentElement || document.body.parentNode || document.body).scrollTop;
        elem.css('height', 'auto').css('height', elem.prop('scrollHeight') );
        window.scrollTo(scrollLeft, scrollTop);
    };

    elem.on('input', function() {
        resizeTextarea( $(this) );
    });

    resizeTextarea( $(elem) );
}

$('.growTextarea').each(growTextarea);
  </script>
@endsection
