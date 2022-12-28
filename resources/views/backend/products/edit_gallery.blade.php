@extends('backend.master')

@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="form-layout form-layout-1">
        <form action="{{ route('ProductGalleryUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="product_id" value="{{ $product_id->id }}">
            @foreach ($gallery as $galleries)
            <div class="row mg-t-20">
                <div class="col-lg-6 form-group mg-b-10-force">
                <label class="form-control-label">Images: <span class="tx-danger">*</span></label>
                <input type="file" value="{{ $galleries->id }}" class="form-control" name="image[]" id="image" multiple="multiple">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('gallery/'.$galleries->created_at->format('Y/m/').$galleries->product_id.'/'.$galleries->image ) }}" alt="gallery image" style="width: 50px;">
                </div>
                <div class="col-lg-2">
                    <a href="{{ route('ProductGalleryDelete', $galleries->id) }}" class="btn btn-primary">delete</a>
                </div>
            </div><!-- col-12 -->
            @endforeach
            <div class="row mg-t-20">
                <div class="col-lg-6 form-group mg-b-10-force">
                <label class="form-control-label">Images: <span class="tx-danger">*</span></label>
                <input type="file" class="form-control" name="image[]" id="image" multiple="multiple">
                </div>
                <div class="col-lg-6">

                </div>
            </div><!-- col-12 -->
            </div><!-- row -->
            <div class="form-layout-footer text-center mg-t-20">
            <button type="submit" class="btn btn-info" style="cursor: pointer">Update Gallery</button>
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
