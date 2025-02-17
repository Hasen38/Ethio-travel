<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TravelController extends Controller
{
    public function index()
    {
        $destinations = Destination::latest()->paginate(5);
        $packages = Package::where('is_special', true)->get();
        return view('Travel.home', compact('destinations', 'packages'));
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id);
        $packages = Package::where('destination_id', $id)->get();
        return view('Travel.show', compact('packages', 'destination'));
    }

    public function Makebooking($id)
    {
        $package = Package::findOrFail($id);
        return view('Travel.booking', compact('package'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'num_guests' => 'required|integer|min:1',
            'booking_date' => 'required|date|after:today',
        ]);

        // Set Stripe API key
        Stripe::setApiKey(env('STRIPE_TEST_SK'));

        // Get package
        $package = Package::findOrFail($id);

        // Create Stripe checkout session
        $session = Session::create([
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $package->name,
                        'description' => "Booking for {$request->num_guests} guests on {$request->booking_date}",
                    ],
                    'unit_amount' => (int)($package->price * 100), // Convert to cents
                ],
                'quantity' => (int)$request->num_guests,
            ]],
            'mode' => 'payment',
            'success_url' => route('payments.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('payments.cancel', [], true),
        ]);

        // Create booking record
        Booking::create([
            'package_id' => $id,
            'user_id' => Auth::id(),
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'num_guests' => $request->num_guests,
            'booking_date' => $request->booking_date,
            'status' => 'pending',
            'session_id' => $session->id,
        ]);

        return redirect($session->url);
    }

    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');
        if (!$sessionId) {
            throw new NotFoundHttpException();
        }

        Stripe::setApiKey(env('STRIPE_TEST_SK'));

        try {
            $session = Session::retrieve($sessionId);
            $booking = Booking::where('session_id', $session->id)
                ->where('status', 'pending')
                ->firstOrFail();

            // Check if payment was actually successful
            if ($session->payment_status === 'paid') {
                Booking::create([

                    'status' => 'paid',
                ]);
                return view('payments.success', ['booking' => $booking]);
            }

            throw new NotFoundHttpException('Payment was not successful');
        } catch (\Exception $e) {
            throw new NotFoundHttpException('Invalid session or booking not found');
        }
    }

    public function cancel()
    {
        return view('payments.cancel');
    }
}
