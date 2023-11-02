<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Payment;
use Illuminate\Support\Str;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;


class PaymentController extends Controller
{
    public function checkout()
    {
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        return view('payment.checkout', compact('cart'));
    }
    public function place_order(Request $request)
    {
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $orderNumber = 'ORD' . Str::random(8);
        $order->order_no = $orderNumber;
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address_1 = $request->address_1;
        $order->address_2 = $request->address_2;
        $order->city = $request->city;
        $order->phone = $request->phone;
        $order->description = $request->info;
        $order->save();
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($cart as $item) {
            $order->products()->attach($item->product_id, [
                'quantity' => $item->quantity,
                'user_id' => Auth::user()->id
            ]);
        }
        $order_id = $order->id;
        // session()->forget('cart');
        return response()->json(['order_id' => $order_id]);
    }
    public function payment()
    {
        $cart = Cart::with('product')
        ->where('user_id',Auth::user()->id)->get();
        return view('payment.payment', compact('cart'));
    }
    public function payment_success(Request $request)
    {
    //    $api_key = 'sk_test_51O6AuDIRfdT0jn8QNNiFYWikU7oUATwdEvvAfJa7zB6dnBogZGO7JOk9h7Z7Q7M03dgMKVsuU5KJ8T9KC2rsk0Xy00CX7Oesnc';
    //    dd($api_key);
        Stripe::setApiKey('sk_test_51O6AuDIRfdT0jn8QNNiFYWikU7oUATwdEvvAfJa7zB6dnBogZGO7JOk9h7Z7Q7M03dgMKVsuU5KJ8T9KC2rsk0Xy00CX7Oesnc');
        
        $token = $request->stripeToken;
        $charge = Charge::create([
            'amount' => $request->price * 100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        $order = Order::find($request->order_id);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.easyship.com/2023-01/shipments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
        "origin_address": {
            "line_1": "Lahore – Kasur Road",
            "city": "Lahore",
            "postal_code": "2000",
            "country_alpha2": "PK",
            "contact_name": "waseem abbas",
            "state": "punjab",
            "company_name": "test",
            "contact_phone": "03404959859",
            "line_2": "smklfmskl",
            "contact_email": "waseemdev7582@gmail.com",
            "newKey": "New Value"
        },
        "sender_address": {
            "line_1": "mskdfmskld",
            "line_2": "smklfmskl",
            "state": "dfkjsfbsk",
            "city": "dnfsjdn",
            "postal_code": "75500",
            "country_alpha2": "PK",
            "contact_name": "bjhbj jb jhhj",
            "contact_phone": "03404959859",
            "contact_email": "waseemdev7582@gmail.com",
            "company_name": "test",
            "newKey": "New Value"
        },
        "return_address": {
            "line_1": "Lahore – pakistan",
            "line_2": "smklfmskl",
            "state": "dfkjsfbsk",
            "city": "dnfsjdn",
            "postal_code": "75500",
            "country_alpha2": "PK",
            "contact_name": "bjhbj jb jhhj",
            "contact_phone": "03404959859",
            "contact_email": "waseemdev7582@gmail.com",
            "company_name": "test"
        },
        "destination_address": {
            "line_1": "'. $order->address_1.'",
            "city": "'. $order->city.'",
            "postal_code": "2000",
            "country_alpha2": "PK",
            "contact_name": "waseem abbas",
            "company_name": "test",
            "contact_phone": "'. $order->phone.'",
            "line_2": "smklfmskl",
            "state": "dfkjsfbsk",
            "contact_email": "waseemdev7582@gmail.com"
        },
        "incoterms": "DDU",
        "insurance": {
            "is_insured": false
        },
        "courier_selection": {
            "allow_courier_fallback": false,
            "apply_shipping_rules": true
        },
        "shipping_settings": {
            "additional_services": {
            "qr_code": "none"
            },
            "units": {
            "weight": "kg",
            "dimensions": "cm"
            },
            "buy_label": false,
            "buy_label_synchronous": false,
            "printing_options": {
            "format": "png",
            "label": "4x6",
            "commercial_invoice": "A4",
            "packing_slip": "4x6"
            }
        },
        "parcels": [
            {
            "items": [
                {
                "dimensions": {
                    "length": 2,
                    "width": 3,
                    "height": 4
                },
                "description": "dsjbfsdbj",
                "declared_currency": "USD",
                "declared_customs_value": 2,
                "actual_weight": 3,
                "category": "product",
                "hs_code": "8542"
                }
            ],
            "total_actual_weight": 2
            }
        ]
        }',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'content-type: application/json',
            'Authorization: Bearer sand_H0dzhStg6R7l8cJxmdw/eujpQUWV6M8jBvouZEu5neQ='
        ),
        ));

        $response = json_decode(curl_exec($curl));
        
        curl_close($curl);
        
        $order_id =$request->order_id;
        $order = Order::find($order_id);
        $order->status = 'paid';
        $order->order_status = 'delivery_in_progress';
        $order->shipment_id = $response->shipment->easyship_shipment_id;
        $order->shipment_url = $response->shipment->tracking_page_url;
        $order->save();
        if($order)
        {
            Cart::truncate();
        }
        // echo $response;

        $order_detail = Order::with([
            'products:id,title,buyBoxPrice,url'
        ])->where('status', 'paid')->where('id', $order_id)->get();
        $products = $order_detail[0]['products']; 
        $success = 'Payment submit successfully and order created';
        $cart = [];
        return view('payment.order', compact('cart', 'order_detail', 'products', 'success'))->with('message', 'Payment was successful');

    }
}
