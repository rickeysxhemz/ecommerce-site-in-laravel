<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function checkout()
    {
        $cart = session('cart', []);
        return view('payment.checkout', compact('cart'));
    }
    public function place_order(Request $request)
    {
        $order = new Order();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address_1 = $request->address_1;
        $order->address_2 = $request->address_2;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->description = $request->info;
        $order->save();
        $cart = session('cart', []);
        foreach ($cart as $item) {
            $order->products()->attach($item['id'], ['quantity' => $item['quantity']]);
        }
        $order_id = $order->id;
        // session()->forget('cart');
        return response()->json(['order_id' => $order_id]);
    }
    public function payment()
    {
        $cart = session('cart', []);
        return view('payment.payment', compact('cart'));
    }
    public function payment_success(Request $request)
    {
        // dd($request->all());
       $api_key = env('STRIPE_SECRET');
        Stripe::setApiKey($api_key);
        
        $token = $request->stripeToken;
        $charge = Charge::create([
            'amount' => $request->price * 100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);
        $order_id =$request->order_id;
        $order = Order::find($order_id);
        $order->status = 'paid';
        $order->save();
        session()->forget('cart');
        return view('index')->with('message', 'Payment was successful');
    }
}
