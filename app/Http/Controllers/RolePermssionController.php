<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermssionController extends Controller
{
    function RoleList(){
        $user = User::paginate();
        $role = Role::all();
        $permission = Permission::all();
        $trushed_user = User::onlyTrashed()->get();
        return view('backend.rolepermission.role_lists',[
            'user' => $user,
            'role' => $role,
            'permission' => $permission,
            'trushed_user' => $trushed_user
        ]);
    }

    function RoleStore(Request $request){
        $role = new Role;
        $role->name = $request->name;
        $role->guard_name = $request->guard_name;
        $role->save();
        return back()->with('RoleStore', "Role Add Successfully");
    }

    function RoleUpdate(Request $req_role){
        $update = Role::findOrFail($req_role->id);
        $update->name = $req_role->name;
        $update->save();
        return back()->with('RoleUpdate', "Role Update Successfully");
    }

    function PermissionStore(Request $req){
        $permissin = new Permission;
        $permissin->name = $req->name;
        $permissin->guard_name = $req->guard_name;
        $permissin->save();
        return back()->with('PermissionStore', "Permission Added Successfully");
    }

    function UpdatePermission(Request $req_permission){
        $update = Permission::findOrFail($req_permission->id);
        $update->name = $req_permission->name;
        $update->save();
        return redirect()->with('UpdatePermission', "Permission Update Successfully");
    }

    function RoleAddToPermission(Request $req_uest){
        $role_name = $req_uest->role_name;
        $permission_name = $req_uest->permission_name;
        $role = Role::where('name', $role_name)->first();
        $role->givePermissionTo($permission_name);
        return back()->with('RoleAddToPermission', "RoleAddTo Permission Add Successfully");

    }

    function RoleAddToUser(Request $request){
        $user_id = $request->user_id;
        $role_name = $request->role_name;
        $user = User::findOrFail($user_id);
        $user->syncRoles($role_name);
        return back()->with('RoleAddToUser', "RoleAddTo User Add Successfully");

    }

    function UpdateRoleAddToUser(Request $req_chenge){
        $user = User::findOrFail($req_chenge->user_id);
        $user->syncPermissions($req_chenge->permission_name);
        return back()->with('UpdateRoleAddToUser', "Update Role Add To User Successfully");
    }

    // function RoleTrushedList(){
    //     $role = Role::all();
    //     $permission = Role::all();
    //     return view('backend.rolepermission.trushed_lists',[
    //         'role' => $role,
    //         'permission' => $permission
    //     ]);
    // }

    function UserDelete($id){
       $user = User::findOrFail($id);
       $user->Delete();
        return back()->with('UserDelete', "User Delete Successfully");
    }

    function UserRestore($id){
        User::withTrashed()->findOrFail($id)->restore();
        return back()->with('UserRestore', "User Restore Successfully");
    }

    function UserPermanentDelete($id){
        User::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('UserPermanentDelete', "User Permanent Delete Successfully");
    }
}
