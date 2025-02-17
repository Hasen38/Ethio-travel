<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\customer;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
        Stripe::setApiKey(env('STRIPE_TEST_SK'));

        $package = Package::find($id);
        $totalPrice = (int)$request->num_guests * (int)$package->price;
$lineItems = [];
$lineItems []= [
    'price_data' => [
        'currency' => 'usd',
        'product_data' => [
            'name' => $package->name,
            'description' => $package->description,
                    ],
                    'unit_amount' => $package->price * 100,
                ],
                'quantity' => 1,
            ];
            $session = Session::create([
                'line_items'=>$lineItems,
                'payment_method_types' => ['card'],
                'mode' => 'payment',
                'success_url' => route('payments.success',[],true).'?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('payments.cancel',[],true),
            ]);
            $booking = new Booking();
                $booking->name = $package->name;
                $booking->phone_number = $request->phone_number;
                $booking->num_guests = $request->num_guests;
                $booking->booking_date = $request->booking_date;
                // 'package_id' = $package->id,
                $booking->user_id = Auth::id();
                $booking->session_id = $session->id;
                $booking->status = 'pending';
                $booking->save();
            return redirect($session->url, 303);
        }

    public function success(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_TEST_SK'));

        $sessionId = $request->get('session_id');
        $customer= null;

        try {
$session = Session::retrieve($sessionId);

if(!$session){
    throw new NotFoundHttpException();
}
$customer = customer::retrieve($session->customer);

$booking = Booking::where('session_id', $session->id)->where('status','pending')->first();

if(!$booking){
    throw new NotFoundHttpException();
}
    $booking->status = 'Paid';
    $booking->save();

return view('payments.success', compact('customer'));
} catch (\Exception $e) {
    throw new NotFoundHttpException();
}
}
    public function cancel()

    {
        return view('payments.cancel');
    }

}
