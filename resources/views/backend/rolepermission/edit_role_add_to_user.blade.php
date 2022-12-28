@extends('backend.master')

@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">
      <div class="row">
        <div class="col-xl-8 m-auto">
          <div class="form-layout form-layout-4">
            <h5 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 text-center">Edit Role Add To User</h5><hr>
            <form action="{{ route('UpdateRoleAddToUser') }}" method="post">
                @csrf
            <div class="row">
                <input type="hidden" name="user_id" value="{{ $users->id }}">
              <label class="col-sm-4 form-control-label">User Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <span>{{ $users->name }}</span>
              </div>
            </div><!-- row -->
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Role Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <span>{{ $role->name }}</span>
              </div>
            </div>
            <div class="row mg-t-20">
              <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                @foreach ($user_permissin as $upermissions)
                        <li style="list-style: none;">
                            <input type="checkbox" name="permission_name[]" id="permission_name" value="{{ $upermissions->name }}" {{ $users->hasPermissionTo($upermissions->name) ? "checked" : '' }}>{{ $upermissions->name }}
                        </li>
                    @endforeach
              </div>
            </div>
            <div class="form-layout-footer mg-t-30 text-center">
              <button class="btn btn-info" style="cursor: pointer">Update Role Add To User</button>
            </div><!-- form-layout-footer -->
        </form>
          </div><!-- form-layout -->
        </div><!-- col-6 -->
      </div><!-- row -->



    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->
@endsection
