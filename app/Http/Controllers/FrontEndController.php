<?php

namespace App\Http\Controllers;

use App\Attributes;
use App\Blog;
use App\Category;
use App\Product;
use App\ProductGallery;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

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
            $output = $output . '<input type="radio" name="color_id" class="btn_check color_id" id="" value="'.$color->color_id.'" data-product="'.$color->product_id.'"><label class="btn btn_primary" class="bt_check" for="btn-check-2">'.$color->get_color->color_name.'</label>';;
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
        $output = $output . '<h3 class="price-detail getAttrPrice"> <input class="btn_price" type="text" name="price" value="'.$prices[0]->price.'" readonly></h3>';
        echo $output;
    }


    // Color Wise Price Ajax Get Request
    function GetResColorToPrice($color, $product){
        $output = '';
        $prices = Attributes::where('color_id', $color)->where('product_id', $product)->get();
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

    function BlogRightSidebar(){
        return view('frontend.rightblog');
    }

    function BlogNoSidebar(){
        return view('frontend.blognosidebar');
    }

    function VendorDashboard(){
        return view('frontend.pages.vendor-dashboard');
    }
    function VendorProfile(){
        return view('frontend.pages.vendor-profile');
    }
    function BecomeVendor(){
        return view('frontend.pages.become-vendor');
    }

    function Wishlist(){
        return view('frontend.pages.wishlist');
    }
    function FrontDashboard(){
        return view('frontend.pages.front-dashbard');
    }
    function Contact(){
        return view('frontend.pages.contact');
    }
    function Cart(){
        return view('frontend.cart');
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
    function PortfolioGrid(){
        return view('frontend.pages.portfolio-grid');
    }
    function PortfolioMasonary(){
        return view('frontend.pages.portfolio-mesonary');
    }
    function AboutUs(){
        return view('frontend.pages.about-us');
    }
    function Search(){
        return view('frontend.pages.search');
    }
    function Review(){
        return view('frontend.pages.review');
    }
    function Compare(){
        return view('frontend.pages.compare');
    }
    function Collection(){
        return view('frontend.pages.collection');
    }
    function Lookbook(){
        return view('frontend.pages.lookbook');
    }
    function SiteMap(){
        return view('frontend.pages.site-map');
    }
    function CommingSoon(){
        return view('frontend.pages.commingsoon');
    }
    function CartModal(){
        return view('frontend.features.cart-modal');
    }
    function QTYCounter(){
        return view('frontend.features.qty-counter');
    }
    function CartTop(){
        return view('frontend.features.cart-top');
    }
    function CartBottom(){
        return view('frontend.features.cart-bottom');
    }
    function CartLeft(){
        return view('frontend.features.cart-left');
    }
    function CartRight(){
        return view('frontend.features.cart-right');
    }
    function NewsLetter(){
        return view('frontend.features.newsletter');
    }
    function Exit(){
        return view('frontend.features.exit');
    }
    function Christmas(){
        return view('frontend.features.christmas');
    }
    function BlackFriday(){
        return view('frontend.features.black-friday');
    }
    function CyberMonday(){
        return view('frontend.features.cyber-monday');
    }
    function NewYear(){
        return view('frontend.features.new-year');
    }
    function CookieBottom(){
        return view('frontend.features.cookie-bottom');
    }
    function CookieLeft(){
        return view('frontend.features.cookie-left');
    }
    function CookieRight(){
        return view('frontend.features.cookie-right');
    }
    function AjaxSearch(){
        return view('frontend.pages.search');
    }
    function InvoiceOne(){
        return view('frontend.features.invoice-one');
    }
    function InvoiceTwo(){
        return view('frontend.features.invoice-two');
    }
    function InvoiceThree(){
        return view('frontend.features.invoice-three');
    }
    function InvoiceFour(){
        return view('frontend.features.invoice-four');
    }
    function OrderSuccess2(){
        return view('frontend.features.order-success2');
    }
    function EmailTemplate(){
        return view('frontend.features.email-template');
    }
    function EmailTemplate2(){
        return view('frontend.features.email-template2');
    }
    function ElementsPage(){
        return view('frontend.features.elements-page');
    }


}
