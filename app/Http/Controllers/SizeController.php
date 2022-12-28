<?php

namespace App\Http\Controllers;

use App\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SizeController extends Controller
{
    function Sizes(){
        $size_list = Size::paginate();
        $size_trush = Size::onlyTrashed()->get();
        return view('backend.sizes.sizes',[
            'size_list' => $size_list,
            'size_trush' => $size_trush,
        ]);
    }

    function SizeStore(Request $request){
        $sizes = New Size;
        $sizes->size_name = $request->size_name;
        $sizes->slug = Str::slug($request->size_name);
        $sizes->save();
        return back()->with('SizeStore', 'Size Added Successfully');
    }

    function SizeUpdate(Request $req_up){
        $update = Size::findOrFail($req_up->id);
        $update->size_name = $req_up->size_name;
        $update->slug = Str::slug($req_up->size_name);
        $update->save();
        return back()->with('SizeUpdate', 'Size Update Successfully');
    }

    function SizeDelete($id){
        Size::findOrFail($id)->delete();
        return back()->with('SizeDelete', 'Size Delete Successfully');
    }

    function SizeRestore($id){
        Size::withTrashed()->findOrFail($id)->restore();
        return back()->with('SizeRestore', 'Size Restore Successfully');
    }

    function SizePermanentDelete($id){
        Size::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('SizePermanentDelete', 'Size Permanent Delete Successfully');
    }
}
