<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class Stripecontroller extends Controller
{
    public function create()
    {
        return view('stripe');
    }

    public function store(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_TEST_SK'));

        $paymentIntent = PaymentIntent::create([
            'amount' => 1000, // Amount in cents
            'currency' => 'usd',
            'payment_method' => $request->payment_method,
            'confirmation_method' => 'manual',
            'confirm' => true,
        ]);

        return response()->json($paymentIntent);
    }
}
