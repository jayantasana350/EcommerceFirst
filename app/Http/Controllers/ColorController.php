<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;
use Illuminate\Support\Str;

class ColorController extends Controller
{
    function Colors(){
        $color_list = Color::paginate();
        $trushed = Color::onlyTrashed()->get();
        return view('backend.colors.colors',[
            'color_list'=>$color_list,
            'trushed' => $trushed,
        ]);
    }

    function ColorStore(Request $request){
        $update = New Color;
        $update->color_name = $request->color_name;
        $update->slug = Str::slug($request->color_name);
        $update->save();
        return back()->with('ColorStore', 'Color Added Successfully');
    }

    function ColorUpdate(Request $req_color){
        $color_update = Color::findOrFail($req_color->id);
        $color_update->color_name = $req_color->color_name;
        $color_update->slug = Str::slug($req_color->color_name);
        $color_update->save();
        return back()->with('ColorUpdate', 'Color Update Successfully');
    }

    function ColorDelete($id){
        Color::findOrFail($id)->delete();
        return back()->with('ColorDelete', 'Color Delete Successfully');
    }

    function ColorRestore($id){
        Color::withTrashed()->findOrFail($id)->restore();
        return back()->with('ColorRestore', 'Color Restore Successfully');
    }

    function ColorParmanentDelete($id){
        Color::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('ColorParmanentDelete', 'Color Permanent Delete Successfully');
    }
}
