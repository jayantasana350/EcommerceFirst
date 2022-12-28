<?php

namespace App\Http\Controllers;

use App\Attributes;
use App\Brand;
use App\Category;
use App\Color;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Product;
use App\ProductGallery;
use App\Size;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    function ProducstLists(){
        $products = Product::paginate();
        $attribute = Attributes::all();
        $attr_trush = Attributes::onlyTrashed()->get();
        $productgallery = ProductGallery::all();
        $product_trushed = Product::onlyTrashed()->get();
        return view('backend.products.products_lists',[
            'products' => $products,
            'attribute' => $attribute,
            'productgallery' => $productgallery,
            'product_trushed' => $product_trushed,
            'attr_trush' => $attr_trush,
        ]);
    }

    function AddProducts(){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $colors = Color::all();
        $sizes = Size::all();
        $brand = Brand::all();
        return view('backend.products.add_product',[
            'category' => $category,
            'subcategory' => $subcategory,
            'brand' => $brand,
            'colors' => $colors,
            'sizes' => $sizes,
        ]);
    }

    function ProductStore(Request $request){

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $ext = Str::random(10). '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(public_path('images/'. $ext));

            $product_id = Product::insertGetId([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'sku' => $request->sku,
                'brand_id' => $request->brand_id,
                'manufecturer' => $request->manufecturer,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'summery' => $request->summery,
                'descripiton' => $request->descripiton,
                'thumbnail' => $ext,
                'created_at' => Carbon::now()
            ]);
            foreach ($request->color_id as $key => $value) {
                Attributes::insert([
                    'color_id' => $value,
                    'product_id' => $product_id,
                    'product_upc' => $request->product_upc[$key],
                    'size_id' => $request->size_id[$key],
                    'price' => $request->price[$key],
                    'quantity' => $request->quantity[$key],
                    'created_at' => Carbon::now(),

                ]);
            }
            if ($request->hasFile('image')) {
                $images = $request->file('image');
                $new_location = public_path('gallery/')
                . Carbon::now()->format('Y/m/')
                . $product_id . '/';

                File::makeDirectory($new_location, $mode = 0777, true, true);

                foreach ($images as $img) {
                    $img_ext = Str::random(10). '.' . $img->getClientOriginalExtension();
                    Image::make($img)->save($new_location. $img_ext);

                    ProductGallery::insert([
                        'product_id' => $product_id,
                        'image' => $img_ext,
                        'created_at' => Carbon::now(),
                    ]);
                }
            }
            return back();
        }
    }

    function ProductEdit($id){
        $category = Category::all();
        $subcategory = SubCategory::all();
        $colors = Color::all();
        $sizes = Size::all();
        $brand = Brand::all();
        $attribute = Attributes::all();
        $attri_bute = Attributes::findOrFail($id);
        $products = Product::findOrFail($id);
        return view('backend.products.edit_product',[
            'category' => $category,
            'subcategory' => $subcategory,
            'brand' => $brand,
            'colors' => $colors,
            'sizes' => $sizes,
            'attribute' => $attribute,
            'products' => $products,
        ]);
    }

    function ProductUpdate(Request $re_update){

        $product_update = Product::findOrFail($re_update->id);

        if ($re_update->hasFile('thumbnail')) {
            $image = $re_update->file('thumbnail');
            $ext = Str::random(10). '.' . $image->getClientOriginalExtension();
            $old_img_location = public_path('images/'. $product_update->thumbnail);
            if (file_exists($old_img_location)) {
                unlink($old_img_location);
            }
            Image::make($image)->save(public_path('images/'. $ext));

            $product_update->thumbnail = $ext;
        }

        $product_update->title = $re_update->title;
        $product_update->slug = Str::slug($re_update->title);
        $product_update->sku = $re_update->sku;
        $product_update->brand_id = $re_update->brand_id;
        $product_update->manufecturer = $re_update->manufecturer;
        $product_update->category_id = $re_update->category_id;
        $product_update->subcategory_id = $re_update->subcategory_id;
        $product_update->summery = $re_update->summery;
        $product_update->descripiton = $re_update->descripiton;
        if ($product_update->save()) {
            $variants = Attributes::where('product_id', $re_update->id)->get();

                foreach ($variants as $key => $variation) {
                    $variation->color_id = $re_update->get('color_id')[$key];
                    $variation->product_upc = $re_update->get('product_upc')[$key];
                    $variation->size_id = $re_update->get('size_id')[$key];
                    $variation->price = $re_update->get('price')[$key];
                    $variation->quantity = $re_update->get('quantity')[$key];
                    $variation->update();
                }
        }

        return back();
    }

    function ProductGalleryEdit($id){
        $product_id = Product::where('id', $id)->first();
        $gallery = ProductGallery::where('product_id', $id)->get();
        return view('backend.products.edit_gallery',[
            'gallery' => $gallery,
            'product_id' => $product_id,
        ]);
    }

    function ProductGalleryDelete($id){
        $gallery = ProductGallery::findOrFail($id);
        $old_img = public_path('gallery/'.$gallery->created_at->format('Y/m/').$gallery->product_id.'/'.$gallery->image);
        if (file_exists($old_img)) {
           unlink($old_img);
           $gallery->delete();
           return back();
        }
    }

    function ProductGalleryUpdate(Request $request){
        if ($request->hasFile('image')) {
            $product_id = $request->product_id;
            $images = $request->file('image');
            $new_location = public_path('gallery/')
            . Carbon::now()->format('Y/m/')
            . $product_id . '/';

            File::makeDirectory($new_location, $mode = 0777, true, true);

            foreach ($images as $img) {
                $img_ext = Str::random(10). '.' . $img->getClientOriginalExtension();
                Image::make($img)->save($new_location. $img_ext);

                // ProductGallery::insert([
                //     'product_id' => $product_id,
                //     'image' => $img_ext,
                //     'created_at' => Carbon::now(),
                // ]);

                $galleryupdate = new ProductGallery;
                $galleryupdate->product_id = $product_id;
                $galleryupdate->image = $img_ext;
                $galleryupdate->save();
            }
        }
        return back();
    }

    function ProductDelete($id){
        $product = Product::findOrFail($id);

        $attributes = Attributes::where('product_id', $product->id)->get();
        foreach ($attributes as $attribute) {
            if ($attribute->product_id == $product->id) {
                $attribute->delete();
            }
        }

        $gallery = ProductGallery::where('product_id', $product->id)->get();
        foreach ($gallery as $galleries) {
            if ($galleries->product_id == $product->id) {
                $galleries->delete();
            }
        }
        $product->delete();
        return back();
    }


    function ProductRestore($id){
        $product_restore = Product::withTrashed()->findOrFail($id);

        $attributes = Attributes::withTrashed()->where('product_id', $product_restore->id)->get();
        foreach ($attributes as $attribute) {
            if ($attribute->product_id == $product_restore->id) {
                $attribute->restore();
            }
        }

        $gallery = ProductGallery::withTrashed()->where('product_id', $product_restore->id)->get();
        foreach ($gallery as $galleries) {
            if ($galleries->product_id == $product_restore->id) {
                $galleries->restore();
            }
        }
        $product_restore->restore();
        return back();
    }


    function ProductPermanentDelete($id){
        $product = Product::withTrashed()->findOrFail($id);
        $old_img = public_path('images/'. $product->thumbnail);
        if (file_exists($old_img)) {
           unlink($old_img);
        }

        $attributes = Attributes::withTrashed()->where('product_id', $product->id)->get();
        foreach ($attributes as $attribute) {
            if ($attribute->product_id == $product->id) {
                $attribute->forceDelete();
            }
        }

        $gallery = ProductGallery::withTrashed()->where('product_id', $product->id)->get();
        foreach ($gallery as $item) {
            $old_gimg = public_path('gallery/'.$item->created_at->format('Y/m/').$item->product_id.'/'.$item->image);
            if ($item->product_id == $product->id & file_exists($old_gimg)) {
                unlink($old_gimg);
                $item->forceDelete();
             }
        }
        $product->forceDelete();
        return back();
    }


}
