<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class Travelcontroller extends Controller
{

    public function index (){
$destinations = Destination::latest()->paginate(5);
return view('travel.home',compact('destinations'));
    }

    public function show($id){
       $destination = Destination::where('id', $id)->firstOrFail();
        $packages = $destination->packages;
       return view('travel.show', compact('destination','packages'));
    }
}
