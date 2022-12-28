<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    function Brands(){
        $brand_list = Brand::paginate();
        $brand_trush = Brand::onlyTrashed()->get();
        return view('backend.brands.brands',[
            'brand_list' => $brand_list,
            'brand_trush' => $brand_trush,
        ]);
    }

    function BrandStore(Request $request){
        $brand = New Brand;
        $brand->brand_name = $request->brand_name;
        $brand->slug = Str::slug($request->brand_name);
        $brand->save();
        return back()->with('BrandStore', 'Brand Added Successfully');
    }

    function BrandUpdate(Request $req_brand){
        $update = Brand::findOrFail($req_brand->id);
        $update->brand_name = $req_brand->brand_name;
        $update->slug = Str::slug($req_brand->brand_name);
        $update->save();
        return back()->with('BrandUpdate', 'Brand Update Successfully');
    }

    function BrandDelete($id){
        Brand::findOrFail($id)->delete();
        return back()->with('BrandDelete', 'Brand Delete Successfully');
    }

    function BrandRestore($id){
        Brand::withTrashed()->findOrFail($id)->restore();
        return back()->with('BrandRestore', 'Brand Restore Successfully');
    }

    function BrandPermanentDelete($id){
        Brand::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('BrandPermanentDelete', 'Brand Permanent Delete Successfully');
    }
}
