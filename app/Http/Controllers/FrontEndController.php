<?php

namespace App\Http\Controllers;

use App\Attributes;
use App\Blog;
use App\Category;
use App\Product;
use App\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
Use App\Cart;

class FrontEndController extends Controller
{
    function Front(){
        $product = Product::latest()->get();
        $attributes = Attributes::all();
        return view('frontend.front',[
            'product' => $product,
            'attributes' => $attributes,
        ]);
    }

    function SingleProduct($slug){
        $single_product = Product::where('slug', $slug)->first();
        $product_gallery = ProductGallery::where('product_id', $single_product->id)->get();
        $attribute_product = Attributes::where('product_id', $single_product->id)->get();
        $collection = collect($attribute_product);
        $groupby = $collection->groupBy('size_id');
        return view('frontend.single_product',[
            'single_product' => $single_product,
            'product_gallery' => $product_gallery,
            'groupby' => $groupby,
            'attribute_product' => $attribute_product,
        ]);
    }

    // Size Wise Color Ajax Get Request
    function GetSizeWiseColor($size, $product){
        $output = '';
        $colors = Attributes::where('size_id', $size)->where('product_id', $product)->get();
        foreach ($colors as $color) {
            $output = $output . '<input type="radio" name="color_id" class="btn_check color_id" id="" value="'.$color->color_id.'" data-product="'.$color->product_id.'"><label class="btn btn_primary" class="bt_check" for="btn-check-2">'.$color->get_color->color_name.'</label>';
        }
        echo $output;
    }

    // Color Wise Size Get Request
    function GetColorWiseSize($color, $product){
        $output = '';
        $sizes = Attributes::where('color_id', $color)->where('product_id', $product)->get();
        foreach ($sizes as $sizename) {
            $output = $output . '<input type="radio" name="size_id" data-product="'.$sizename->product_id.'" class="btn_check size_id" value="'.$sizename->size_id.'"> <label class="btn btn_primary">'.$sizename->get_size->size_name.'</label><style>
            .sizeadd label.bt_check{position: relative;} .sizeadd input.btn_check[type=radio] { position: absolute; cursor: pointer; width: 80px; height: 30px; background: transparent; opacity: 0.08; } .size-variant label.btn.btn_primary { height: 30px !important; width: auto !important; cursor: pointer !important; border: 1px solid #cdcdcd !important; border-radius: 0px !important; padding: 3px 10px 0px 10px !important; margin-right: 5px !important; } </style>';
        }
        echo $output;
    }

    // Size Wise Price Ajax Get Request
    function GetSizeWisePrice($size, $product){
        $output = '';
        $prices = Attributes::where('size_id', $size)->where('product_id', $product)->get();
        $output = $output . '<h3 class="price-detail getAttrPrice"> <input class="btn_price" type="text" name="price" value="'.$prices[0]->price.'.00" readonly></h3>';
        echo $output;
    }


    // Color Wise Price Ajax Get Request
    function GetResColorToPrice($color, $product){
        $output = '';
        $prices = Attributes::where('color_id', $color)->where('product_id', $product)->get();
        $output = $output . '<h3 class="price-detail getAttrPrice"> <input class="btn_price" type="text" name="price" value="'.$prices[0]->price.'" readonly></h3>';
            echo $output;
    }

    // // Color Wise Size Ajax Post Request
    // function GetqSizeWiseColor(Request $request){
    //     $output = '';
    //     // return $request->all();
    //     if ($request->ajax()) {
    //         $data = $request->all();
    //         // return $data;
    //         // echo "<pre>"; print_r($data); die;
    //         $attrColorToSize = Attributes::where(['product_id' => $data['product_id']])->first();
    //         // return $attrColorToSize;
    //     }
    //     $output = $output . '<h3 class="price-detail sizesadd"> <input class="btn_price" type="text" data-product="'.$attrColorToSize->product_id.'" name="color_id" value="'.$attrColorToSize->get_size->size_name.'"></h3>';
    //     echo $output;
    // }


    function QuickSizeWiseColor($color, $product){
        // return 'ok';
        $output = '';
        $prices = Attributes::where('color_id', $color)->where('product_id', $product)->get();
        return $prices;
        $output = $output . '<h3 class="price-detail getAttrPrice"> <input class="btn_price" type="text" name="price" value="'.$prices[0]->price.'" readonly></h3>';
            echo $output;
    }





    function ShopPage(){
        return view('frontend.shop');
    }

    function BlogDetails(){
        $blogss = Blog::latest()->first();
        return view('frontend.blogdetails',[
            'blogss' => $blogss
        ]);
    }


    function BlogLeftSidebar(){
        $blogs = Blog::all();
        $recentblog = Blog::latest()->get();
        return view('frontend.leftblog', [
            'blogs' => $blogs,
            'recentblog' => $recentblog

        ]);
    }

    function AboutUs(){
        return view('frontend.pages.about-us');
    }
    function Wishlist(){
        return view('frontend.pages.wishlist');
    }
    function Contact(){
        return view('frontend.pages.contact');
    }
    function ForgetPassword(){
        return view('frontend.pages.forget-password');
    }
    function Profile(){
        return view('frontend.pages.profile');
    }
    function OrderSuccess(){
        return view('frontend.pages.order-success');
    }
    function OrderTracking(){
        return view('frontend.pages.order-tracking');
    }
    function Search(){
        return view('frontend.pages.search');
    }
    function FAQ(){
        return view('frontend.pages.FAQ');
    }
    function SixGrid(){
        return view('frontend.six_grid');
    }


}
