<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Checkout;
use App\Order;
use App\Attributes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use Stripe;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   function MakePayment(Request $request){

     $order = Order::all();

    Mail::to(Auth::user()->email)->send(new OrderShipped($order));

        if ($request->payment == 'Card') {
            $shipping = New Checkout;
            $shipping->user_id = Auth::id();
            $shipping->first_name = $request->first_name;
            $shipping->last_name = $request->last_name;
            $shipping->phone = $request->phone;
            $shipping->email = $request->email;
            $shipping->city_id = $request->city_id;
            $shipping->address = $request->address;
            $shipping->zip_code = $request->zip_code;
            // $shipping->status = $request->status;
            // $shipping->payment_status = $request->payment_status;
            $shipping->coupon_code = $request->coupon_code;
            $shipping->save();

            $cookie = Cookie::get('cookie_id');
            $carts = Cart::where('cookie_id', $cookie)->get();

            foreach ($carts as $cart) {
                $order = New Order;
                $order->checkout_id = $shipping->id;
                $order->product_id = $cart->product_id;
                $order->product_unit_price = $cart->price;
                $order->quantity = $cart->quantity;
                $order->save();

                $attribute = Attributes::where('product_id', $cart->product_id)->where('color_id', $cart->color_id)->where('size_id', $cart->size_id);
                if ($attribute->exists()) {
                    $attribute->decrement('quantity', $cart->quantity);
                }
                // $cart->decrement('quantity', $cart->quantity);
                $cart->delete();
            }

            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                    "amount" => 100 * 100,
                    "currency" => "usd",
                    "source" => 'tok_visa',
                    "description" => "Test payment from itsolutionstuff.com."
            ]);

            $payment_update = Checkout::findOrFail($shipping->id);
            $payment_update->payment_status = 1;
            $payment_update->save();

            return 'Card Payment Successfully';
        }
        elseif ($request->payment == 'Cash') {
            return 'Cash';
        }
        elseif ($request->payment == 'Paypal') {
            return 'Paypal';
        }
        else {
            return 'Select One Payment method';
        }

   }

}
