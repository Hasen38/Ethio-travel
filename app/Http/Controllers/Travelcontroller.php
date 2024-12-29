<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;

class Travelcontroller extends Controller
{

    public function index()
    {
        $destinations = Destination::latest()->paginate(5);
        return view('travel.home', compact('destinations'));
    }

    public function show($id)
    {
        $packages = Package::where('destination_id', $id)->get();
        return view('travel.show', compact('packages'));
    }
    public function Makebooking($id)
    {
        $package = Package::find($id);
        $user = Auth::id();
        return view('travel.booking', compact('package', 'user'));
    }
    // public function storeReservation(Request $request, $id)
    // {

    //     $package = Package::find($id);

    //     Booking::create([
    //         'package_id' => $package->id,
    //         'name' => $request->name,
    //         'phone_number' => $request->phone_number,
    //         'num_guests' => $request->num_guests,
    //         'booking_date' => $request->booking_date,
    //         'price' => $package->price * $request->num_guests,
    //         'user_id' => Auth::id(),
    //     ]);

    //     return redirect()->route('payments.store', ['package_id' => $package->id]);
    // }
    public function store(Request $request,$id)
    {
        $packages = Package::where('id',$id)->get();

        foreach ($packages as $package) {
         Booking::create([
            'package_id' => $package->id,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'num_guests' => $request->num_guests,
            'booking_date' => $request->booking_date,
            'price' => $package->price * $request->num_guests,
            'user_id' => Auth::id(),
        ]);

        Stripe::setApiKey(env('STRIPE_TEST_SK'));
            $priceIncents = $package->price * 100;
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                    'product_data' => [
                        'name' => $package->name,
                        'description' => $package->description,
                    ],
                    'unit_amount' => $priceIncents,
                ],
                'quantity' => 1,
                ]],
            'mode' => 'payment',
            'success_url' => route('payments.success'),
            'cancel_url' => route('payments.cancel'),
        ]);
    }
        return redirect($session->url, 303);
    }

}
