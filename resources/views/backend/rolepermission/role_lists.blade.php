@extends('backend.master')
@section('user_permission')
    active
@endsection
@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">

        <div class="container hidden">
            <ul  class="nav nav-pills">
                <li class="active"><a  href="#" data-target="#allusers" data-toggle="tab" class="btn btn-info mg-l-4">All Users</a></li>
                <li><a href="#" data-target="#roles" data-toggle="tab" class="btn btn-info mg-l-4">Roles</a></li>
                <li><a href="#" data-target="#permission" data-toggle="tab" class="btn btn-info mg-l-4">Permissions</a></li>
                <li><a href="#" data-target="#trushed" data-toggle="tab" class="btn btn-info mg-l-4">Trushed</a></li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="allusers">
                    {{--========================= Role Add to User Modal Start Here =========================--}}
                    <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1" data-toggle="modal" data-target="#exampleModalCenter4">RoleAdd To User</a>
                    <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-3" style="width: 400px">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Role Add To User</h5>
                                <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-layout form-layout-12">
                                    <form action="{{ route('RoleAddToUser') }}" method="POST">
                                        @csrf
                                        <div class="row">
                                        <label class="col-sm-4 form-control-label">Role Name: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select name="role_name" id="role_name" class="form-control">
                                                @foreach ($role as $roles)
                                                <option value="{{ $roles->name }}">{{ $roles->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div><!-- row -->
                                        <div class="row mg-t-20">
                                        <label class="col-sm-4 form-control-label">User Name: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            <select name="user_id" id="user_id" class="form-control">
                                                @foreach ($user as $users)
                                                <option value="{{ $users->id }}">{{ $users->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </div>
                                        <div class="form-layout-footer mg-t-30 text-center">
                                        <button class="btn btn-info" style="cursor: pointer;">Assign Role To User</button>
                                        </div><!-- form-layout-footer -->
                                    </form>
                                    </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    {{--========================= Role Add to User Modal Ends Here =========================--}}

                    {{--========================= User Lists Start Here =========================--}}

                        <table class="table table-bordered table-colored table-info">
                        <thead>
                            <tr>
                            <th class="wd-10p">ID</th>
                            <th class="wd-35p">User Name</th>
                            <th class="wd-35p">Role</th>
                            <th class="wd-20p">Permission</th>
                            <th class="wd-20p">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $key=>$users)
                            <tr>
                            <th>{{ $user->firstItem() + $key }}</th>
                            <td>{{ $users->name }}</td>
                            <td>
                                @foreach ($users->getRoleNames() as $ur)
                                    <li>{{ $ur }}</li>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($users->getAllPermissions() as $up)
                                    <li>{{ $up->name }}</li>
                                @endforeach
                            </td>
                            <td class="d-flex">
                                <a href="" class="btn btn-info mr-1"  data-toggle="modal" data-target="#RoleAddToUserEdit{{ $users->id }}"><i class="fa fa-pencil"></i></a>
                                <form action="{{ route('UserDelete', $users->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" style="cursor: pointer" class="btn btn-danger icon ion-trash-a"></button>
                                </form>
                            </td>
                            </tr>

                                    <div class="modal fade" id="RoleAddToUserEdit{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content p-3" style="width: 400px">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Update Role</h5>
                                            <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-layout form-layout-12">
                                                    <h5 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10 text-center">Edit User Permissions</h5><hr>
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
                                        <label class="col-sm-4 form-control-label">Permissions: <span class="tx-danger">*</span></label>
                                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                            @foreach ($permission as $upermissions)
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
                                        </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            @endforeach
                        </tbody>
                        {{ $user->links() }}
                        </table>
                    {{--========================= User List Ends Here =========================--}}
                </div>
                <div class="tab-pane" id="roles">
                    {{--========================= Role Add Modal Start Here =========================--}}
                    <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1"  data-toggle="modal" data-target="#exampleModalCenter">Add Role</a>
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Add Role</h5>
                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('RoleStore') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <label class="col-sm-4 form-control-label">Role Name: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="name" class="form-control" placeholder="Enter Role Name">
                                            </div>
                                            </div><!-- row -->
                                            <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Guard Name: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="guard_name" class="form-control" placeholder="Enter Guard Name">
                                            </div>
                                            </div>
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Add Role</button>
                                            </div><!-- form-layout-footer -->
                                        </form>
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{--========================= Role Add Modal Ends Here =========================--}}

                          {{--========================= Role Add To Permission Modal Start Here =========================--}}

                        <a href="" style="display:inline; float: right;" class="btn btn-outline-info mb-1 mr-1" data-toggle="modal" data-target="#exampleModalCenter3">RoleAdd To Permission</a>
                        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Role Add To Permission</h5>
                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('RoleAddToPermission') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                            <label class="col-sm-4 form-control-label">Role Name: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <select name="role_name" id="role_name" class="form-control">
                                                    @foreach ($role as $roles)
                                                    <option value="{{ $roles->name }}">{{ $roles->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            </div><!-- row -->
                                            <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">Permission Name: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <select name="permission_name" id="permission_name" class="form-control">
                                                    @foreach ($permission as $permissions)
                                                    <option value="{{ $permissions->name }}">{{ $permissions->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Assign Permission To Role</button>
                                            </div><!-- form-layout-footer -->
                                        </form>
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          {{--========================= Role Add To Permission Modal Ends Here =========================--}}

                          {{--========================= Role List Start Here =========================--}}

                      <table class="table table-bordered table-colored table-info">
                        <thead>
                          <tr>
                            <th class="wd-10p">ID</th>
                            <th class="wd-35p">Role Name</th>
                            <th class="wd-35p">Permission</th>
                            <th class="wd-35p">Guard Name</th>
                            <th class="wd-20p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($role as $key=>$roles)
                          <tr>
                            <th>{{ $loop->index + 1 }}</th>
                            <td>{{ $roles->name }}</td>
                            <td>
                                @foreach ($roles->getPermissionNames() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </td>
                            <td>{{ $roles->guard_name }}</td>
                            <td class="d-flex">
                                <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#RoleEdit{{ $roles->id }}"><i class="fa fa-pencil"></i></a>
                                <button data-swal-toast-template="#my-template" class="btn btn-danger icon ion-trash-a"></button>
                            </td>
                          </tr>

                          <div class="modal fade" id="RoleEdit{{ $roles->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content p-3" style="width: 400px">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Update Role</h5>
                                  <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-layout form-layout-12">
                                        <form action="{{ route('RoleUpdate') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" name="id" value="{{ $roles->id }}">
                                            <label class="col-sm-4 form-control-label">Role Edit: <span class="tx-danger">*</span></label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <input type="text" name="name" class="form-control" placeholder="Enter Role Name" value="{{ $roles->name }}">
                                            </div>
                                            </div><!-- row -->
                                            <div class="form-layout-footer mg-t-30 text-center">
                                            <button class="btn btn-info" style="cursor: pointer;">Update Role</button>
                                            </div><!-- form-layout-footer -->
                                        </form>
                                      </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </tbody>
                      </table><hr>
                      {{--========================= Role List Ends Here =========================--}}
                </div>
                <div class="tab-pane" id="permission">
                        {{--========================= Permission Add Modal Start Here =========================--}}
                    <a href="" style="display:inline; float: right; " class="btn btn-outline-info mb-1" data-toggle="modal" data-target="#exampleModalCenter1">Add Permission</a>

                        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content p-3" style="width: 400px">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Permission</h5>
                                <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                  <div class="form-layout form-layout-12">
                                      <form action="{{ route('PermissionStore') }}" method="POST">
                                          @csrf
                                          <div class="row">
                                          <label class="col-sm-4 form-control-label">Permission Name: <span class="tx-danger">*</span></label>
                                          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                              <input type="text" name="name" class="form-control" placeholder="Permission Name">
                                          </div>
                                          </div><!-- row -->
                                          <div class="row mg-t-20">
                                          <label class="col-sm-4 form-control-label">Guard Name: <span class="tx-danger">*</span></label>
                                          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                              <input type="text" name="guard_name" class="form-control" placeholder="Enter Guard Name">
                                          </div>
                                          </div>
                                          <div class="form-layout-footer mg-t-30 text-center">
                                          <button class="btn btn-info" style="cursor: pointer;">Add Permission</button>
                                          </div><!-- form-layout-footer -->
                                      </form>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        {{--========================= Permission Add Modal Ends Here =========================--}}

                        {{--========================= Permission List Start Here =========================--}}

                        <table class="table table-bordered table-colored table-info">
                          <thead>
                            <tr>
                              <th class="wd-10p">ID</th>
                              <th class="wd-35p">Permission Name</th>
                              <th class="wd-35p">Guard Name</th>
                              <th class="wd-20p">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @foreach ($permission as $key => $permissions)
                            <tr>
                              <th>{{ $loop->index+1 }}</th>
                              <td>{{ $permissions->name }}</td>
                              <td>{{ $permissions->guard_name }}</td>
                              <td class="d-flex">
                                  <a href="" class="btn btn-info mr-1" data-toggle="modal" data-target="#PermissionEdit{{ $permissions->id }}"><i class="fa fa-pencil"></i></a>
                                  <button data-swal-toast-template2="#my-template" class="btn btn-danger icon ion-trash-a"></button>
                              </td>
                            </tr>

                            <div class="modal fade" id="PermissionEdit{{ $permissions->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content p-3" style="width: 400px">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Role</h5>
                                    <button type="button" style="cursor: pointer" class="close p-3" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="form-layout form-layout-12">
                                          <form action="{{ route('UpdatePermission') }}" method="POST">
                                              @csrf
                                              <div class="row">
                                                  <input type="hidden" name="id" value="{{ $permissions->id }}">
                                              <label class="col-sm-4 form-control-label">Role Edit: <span class="tx-danger">*</span></label>
                                              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                  <input type="text" name="name" class="form-control" placeholder="Enter Role Name" value="{{ $permissions->name }}">
                                              </div>
                                              </div><!-- row -->
                                              <div class="form-layout-footer mg-t-30 text-center">
                                              <button class="btn btn-info" style="cursor: pointer;">Update Role</button>
                                              </div><!-- form-layout-footer -->
                                          </form>
                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </tbody>
                        </table><hr>

                        {{--========================= Permission List Ends Here =========================--}}
                </div>
                <div class="tab-pane" id="trushed">
                            {{--========================= User Lists Start Here =========================--}}
                    <table class="table table-bordered table-colored table-info mt-5">
                            <thead>
                                <tr>
                                <th class="wd-10p">ID</th>
                                <th class="wd-35p">User Name</th>
                                <th class="wd-35p">User Email</th>
                                <th class="wd-20p">Created_at</th>
                                <th class="wd-20p">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trushed_user as $key=>$trush_us)
                                <tr>
                                    <th>{{ $loop->index + 1 }}</th>
                                    <td>{{ $trush_us->name }}</td>
                                    <td>{{ $trush_us->email }}</td>
                                    <td>{{ $trush_us->created_at ?? 'NA' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('UserRestore', $trush_us->id) }}" class="btn btn-warning mr-1"><i class="fa fa-refresh"></i></a>
                                        <a href="{{ route('UserPermanentDelete', $trush_us->id) }}" class="btn btn-danger icon ion-trash-a"></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                            {{--========================= User List Ends Here =========================--}}
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
        @if(session('RoleStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('RoleUpdate'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('PermissionStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('UpdatePermission'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Permission Update Successfully',
                showConfirmButton: false,
                timer: 2000
            })
        @endif
        @if(session('RoleAddToPermission'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Add To Permisison Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('RoleAddToUser'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Add To User Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('PermissionStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('UpdateRoleAddToUser'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Role Add to User Update Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('UserDelete'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'User Delete Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('UserRestore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'User Restore Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('UserPermanentDelete'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'User Permanent Delete Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif

        Toast.mixin({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: 'Oops...',
        text: "You Can't Delete Any Roles",
        footer: '<a href="">Why do I have this issue?</a>'
        }).bindClickHandler('data-swal-toast-template')

        Toast.mixin({
        toast: true,
        icon: 'error',
        title: 'Oops...',
        text: "You Can't Delete Any Permission",
        footer: '<a href="">Why do I have this issue?</a>'
        }).bindClickHandler('data-swal-toast-template2')
    </script>


@endsection
