@extends('backend.master')

@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
        <div class="col-xl-8 m-auto">
          <div class="form-layout form-layout-4">
            <h5 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 text-center">Edit Role Add To User</h5><hr>
            <form action="{{ route('UpdatePermission') }}" method="post">
                @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $permission->id }}">
              <label class="col-sm-4 form-control-label">User Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" class="form-control" name="name" value="{{ $permission->name }}">
              </div>
            </div><!-- row -->
            <div class="form-layout-footer mg-t-30 text-center">
              <button class="btn btn-info" style="cursor: pointer">Update Permission</button>
            </div><!-- form-layout-footer -->
        </form>
          </div><!-- form-layout -->
        </div><!-- col-6 -->
      </div><!-- row -->



    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
@endsection
