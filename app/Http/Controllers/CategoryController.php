<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    function Category(){
        $cat_list = Category::paginate();
        $cat_trush = Category::onlyTrashed()->get();
        $subcat_list = SubCategory::with('category')->paginate(5);
        $scat_trush = SubCategory::onlyTrashed()->get();
        return view('backend.categories.categories',[
            'cat_list' => $cat_list,
            'cat_trush' => $cat_trush,
            'subcat_list' => $subcat_list,
            'scat_trush' => $scat_trush
        ]);
    }

    function CategoryStore(Request $req_cat){
        $categoryadd = new Category;
        $categoryadd->category_name = $req_cat->category_name;
        $categoryadd->description = $req_cat->description;
        $categoryadd->slug = Str::slug($req_cat->category_name);
        $categoryadd->save();
        return back()->with('CategoryStore', "Category Added Successfully");
    }

    function CategoryUpdate(Request $request){
        $update = Category::findOrFail($request->id);
        $update->category_name = $request->category_name;
        $update->description = $request->description;
        $update->slug = Str::slug($request->category_name);
        $update->save();
        return back()->with('CategoryUpdate', "Category Update Successfully");
    }

    function CategoryDelete($id){
        Category::findOrFail($id)->delete();
        return back()->with('CategoryDelete', "Category Delete Successfully");
    }

    function CategoryRestore($id){
        Category::withTrashed()->findOrFail($id)->restore();
        return back()->with('CategoryRestore', "Category Restore Successfully");
    }

    function CategoryPermanentDelete($id){
        Category::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('CategoryPermanentDelete', "Category Permanent Delete Successfully");
    }

    function SubCategoryStore(Request $req_subcat){
        $categoryadd = new SubCategory;
        $categoryadd->subcategory_name = $req_subcat->subcategory_name;
        $categoryadd->category_id = $req_subcat->category_id;
        $categoryadd->description = $req_subcat->description;
        $categoryadd->slug = Str::slug($req_subcat->subcategory_name);
        $categoryadd->save();
        return back()->with('SubCategoryStore', "SubCategory Added Successfully");
    }

    function SubCategoryUpdate(Request $req_sub){
        $update = SubCategory::findOrFail($req_sub->id);
        $update->subcategory_name = $req_sub->subcategory_name;
        $update->category_id = $req_sub->category_id;
        $update->description = $req_sub->description;
        $update->slug = Str::slug($req_sub->subcategory_name);
        $update->save();
        return back()->with('SubCategoryUpdate', "SubCategory Update Successfully");
    }

    function SubCategoryDelete($id){
        SubCategory::findOrFail($id)->delete();
        return back()->with('SubCategoryDelete', "SubCategory Delete Successfully");
    }

    function SubCategoryRestore($id){
        SubCategory::withTrashed()->findOrFail($id)->restore();
        return back()->with('SubCategoryRestore', "SubCategory Restore Successfully");
    }

    function SubCategoryPermanentDelete($id){
        SubCategory::withTrashed()->findOrFail($id)->forceDelete();
        return back()->with('SubCategoryPermanentDelete', "SubCategory Permanent Delete Successfully");
    }


}
