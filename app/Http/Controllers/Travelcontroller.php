<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Travelcontroller extends Controller
{

    public function index (){
$destinations = Destination::latest()->paginate(5);
return view('travel.home',compact('destinations'));
    }

    public function show($id){
       $packages = Package::where('destination_id', $id)->get();
       return view('travel.show', compact('packages'));
    }
    public function Makebooking($id){
        $package=Package::find($id);
        $user = Auth::id();
        return view('travel.booking',compact('package','user'));
    }
    public function storeReservation(Request $request,$id){

        $package = Package::find($id);

       Booking::create([
    'name'=> $request->name,
    'phone_number'=> $request->phone_number,
    'num_guests'=> $request->num_guests,
    'booking_date'=> $request->booking_date,
    'price'=> $package->price * $request->num_guests,
    'user_id'=>Auth::id(),
    ]);

    return redirect()->route('create');
}


}

