<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use App\Cart;
use App\City;
use App\Country;
use App\State;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function ProductCheckout(){
        $cookie = Cookie::get('cookie_id');
        $carts = Cart::where('cookie_id', $cookie)->get();
        $countries = Country::orderBy('name', 'asc')->get();
        return view('frontend.checkout', [
            'carts' => $carts,
            'countries' => $countries
        ]);
    }

    function GetState($id){
        $states = State::where('country_id', $id)->get();
        return response()->json($states);
    }

    function GetCity($id){
        $cities = City::where('state_id', $id)->get();
        return response()->json($cities);
    }
}
