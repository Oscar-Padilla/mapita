<?php

namespace App\Http\Controllers;

use App\Models\UserLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLocations = DB::table('user_locations')->get();
        return $userLocations;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userLocation = UserLocation::create([
            'user_id'=> $request->user,
            'location_id'=> $request->location,
        ]);
        $userLocation->save();
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(UserLocation $userLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserLocation $userLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserLocation $userLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserLocation $userLocation)
    {
        //
    }
}
