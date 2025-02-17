<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Admincontroller extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function bookings()
    {
        $bookings = Booking::latest()->paginate(8);
        return view('admin.bookings', compact('bookings'));
    }

    public function packages()
    {
        $packages = Package::latest()->paginate(8);
        return view('admin.packages', compact('packages'));
    }

    public function createpackage()
    {
        $destinations = Destination::all();
        return view('admin.createpackage', compact('destinations'));
    }

    public function storepackage(Request $request)
    {
        $validated = $request->validate([
            'destination_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required',
            'is_special' => 'nullable|boolean',
            'inclusions' => 'nullable|array',
            'exclusions' => 'nullable|array',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $image = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('packages', 'public');
        }

        $special = $request->has('is_special') ? true : false;

        $inclusions = $request->has('inclusions') ? json_encode($request->inclusions) : null;
        $exclusions = $request->has('exclusions') ? json_encode($request->exclusions) : null;

        Package::create([
            'destination_id' => $validated['destination_id'],
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'duration' => $validated['duration'],
            'is_special' => $special,
            'image' => $image,
            'inclusions' => $inclusions,
            'exclusions' => $exclusions
        ]);

        return redirect()->route('admin.packages')->with('success', 'Package created successfully');
    }

    public function tours()
    {
        $tours = Destination::latest()->paginate(8);
        return view('admin.Destinations', compact('tours'));
    }


    public function createtours()
    {
        return view('admin.CreateTours');
    }

    public function storetours(Request $request)
    {
        $validated = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'image_url' => 'required',

        ]);

        $image = null;
        if ($request->hasFile('image_url')) {
            $image = $request->file('image_url')->store('images', 'public');
        }

        Destination::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'image_url' => $image,
        ]);

        return redirect()->route('admin.tours')->with('success', 'Tour created successfully');
    }

    public function destroydestination($id)
    {
        $destination = Destination::find($id);
        $destination->delete();
        return redirect()->route('admin.tours')->with('success', 'Package deleted successfully');
    }

    public function destroypackage($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->route('admin.packages')->with('success', 'Package deleted successfully');
    }

    public function destroybooking($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect()->route('admin.bookings')->with('success', 'Booking deleted successfully');
    }
}
