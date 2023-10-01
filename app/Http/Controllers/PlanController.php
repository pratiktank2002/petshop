<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Razorpay\Api\Api;
use App\Models\Payment;
use Stripe\PaymentIntent;
use Stripe\Exception\CardException;
use Stripe\Service\PaymentIntentService;
use Stripe\Stripe;
use Stripe\Subscription;

class PlanController extends Controller
{
    //
    public function index()
    {
        $plans = Plan::get();
        return view("frontend.price", compact("plans"));
    }

    public function show(Plan $plan, Request $request)
    {
        //show the price detail of choosen plan
        $user = auth()->user();
        return view("frontend.subscription", compact("plan",));  
    }
  
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);
        
        $api = new Api(env('RAZORPAY_KEY'),env('RAZORPAY_SECRET'));

        $razorpayOrder = $api->order->create([
            'amount' => $plan->price , // Amount in paisa
            'currency' => 'INR',
            'receipt' => 'order_rcptid_11',
            'payment_capture' => 1,
        ]);
        $order_id = $razorpayOrder->id;

        //store the detail of new user 
        $user_pay = new Payment();

        $user_pay->name = $plan->plan_name;
        $user_pay->user_id = auth()->user()->id;
        $user_pay->amount = $plan->price;
        $user_pay->payment_id = $razorpayOrder->id;
        $user_pay->razorpay_id =$request->razorpay_payment_id;
        $user_pay->payment_done = true;
        $user_pay->save();

        // return view("frontend.success");

        return redirect()->route('price')->with('success', 'Plan purchased successfully.');

    }

}
// razorpay id's -->>
//key = rzp_test_GGrCZPdVvuEEuS
//secret = TVapxK2lzJRY4YjItnMtwRA0


// public function subscription(Request $request)
    // {
    //     $plan = Plan::find($request->plan);

    //     $stripe = new \Stripe\StripeClient(
    //         'sk_test_51MgnMDSHKHpK7GqA2eqEof1XXbSqNqBl8IygXErg70SeiDXIOdY72A5ZSiHKeNi60HTIlAp1eBRgFjaDKtZUtixc00REAJYZVa'
    //       );
  
    //     $intent = auth()->user()->createSetupIntent();
  
    //       $stripe->paymentIntents->confirm(
    //         $intent->id,
    //         ['payment_method' => 'card']
    //       );
          

    //     $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
    //                     ->create($request->token);
   
    //     return view("subscription_success");
    // }
