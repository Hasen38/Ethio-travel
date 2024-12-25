<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Destination;
use Illuminate\Http\Request;

class Travelcontroller extends Controller
{

    public function index (){
$destinations = Destination::latest()->paginate(5);
return view('travel.home',compact('destinations'));
    }

    public function show($id){
       $destination = Destination::with('Package')->where('id', $id)->firstOrFail();
        $packages = $destination->package;
       return view('travel.show', compact('destination','packages'));
    }
    public function Makebooking($id){
        return view('travel.booking');
    }
}
