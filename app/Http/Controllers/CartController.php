<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class CartController extends Controller
{
    function AddToCart(Request $request){
        // return $request->all();
        $cookie = Cookie::get('cookie_id');
        if ($cookie) {
            $unique = $cookie;
        }else {
            $unique = Str::random(7).rand(1,1000);
            Cookie::queue('cookie_id', $unique, 43200);
        }
        $existing = Cart::where('cookie_id', $unique)->where('product_id', $request->product_id)->where('color_id', $request->color_id)->where('size_id', $request->size_id);
        if ($existing->exists()) {
            $existing->increment('quantity', $request->quantity);
            $existing->increment('price', $request->price);
        }
        else {
            $cart = new Cart;
            $cart->cookie_id = $unique;
            $cart->product_id = $request->product_id;
            $cart->color_id = $request->color_id;
            $cart->size_id = $request->size_id;
            $cart->price = $request->price;
            $cart->quantity = $request->quantity;
            $cart->save();
        }
        return back();
    }

    function CartPage(Request $request){

        $coupon_discount = 0;
        $codes = $request->coupon_code;
        if ($codes == '') {
            $cookie = Cookie::get('cookie_id');
            $carts = Cart::where('cookie_id', $cookie)->get();
            return view('frontend.cart',[
                'carts' => $carts,
                'coupon_discount' => $coupon_discount,
            ]);
        }
        else {
            $cookie = Cookie::get('cookie_id');
            if (Coupon::where('coupon_code', $codes)->exists()) {
                $carts = Cart::where('cookie_id', $cookie)->get();
                $valid_date = Coupon::where('coupon_code', $codes)->first();
                if (Carbon::now()->format('Y-m-d') <= $valid_date->coupon_validity) {
                   if ($valid_date->coupon_lavel == 'amount') {
                    $coupon_discount = $valid_date->coupon_discount;
                   }

                   else {
                    $total = 0;
                    foreach ($carts as $cat) {
                        $total += $cat->price * $cat->quantity;
                    }
                    $coupon_discount = ($total / 100) * $valid_date->coupon_discount;
                   }
                }

                else {
                    return 'Invalid';
                }
            }
            else {
                return 'Code not found';
            }

            return view('frontend.cart',[
                'carts' => $carts,
                'coupon_discount' => $coupon_discount,
                'codes' => $codes,
            ]);
        }


    }

    function UpdateCart(Request $request){
        // return $request->all();
        foreach ($request->cart_id as $key => $data) {
            $cart = Cart::findOrFail($data);
            $cart->quantity = $request->quantity[$key];
            $cart->save();

            return back();
        }
        // return back();
    }

    function SingleCartDelete($id){
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return back();
    }

    function CouponAdd(){
        return 'ok';
    }


}
