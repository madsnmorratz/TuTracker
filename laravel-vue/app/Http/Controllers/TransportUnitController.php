<?php

namespace App\Http\Controllers;

use App\Models\TransportUnit;
use Illuminate\Http\Request;

class TransportUnitController extends Controller
{
  public function index()
  {
      // Fetch all transport units and return them as JSON
      return response()->json(TransportUnit::all());
  }

    function getTrailer()
    {
      $trailerUnits = TransportUnit::where('datatype', 'Trailer')
          ->get();
      return response()->json($trailerUnits);
    }
    
    function getTruck()
    {
      $truckUnits = TransportUnit::where('datatype', 'Truck')
          ->get();
      return response()->json($truckUnits);
    }

    public function store(Request $request)
    {
        // Validate request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'datatype' => 'required|in:Trailer,Truck',
        ]);

        // Create a new transport unit
        $transportUnit = TransportUnit::insert($validated);

        // Return the created transport unit as a response
        return response()->json($transportUnit, 201);
    }
}
