<?php

namespace App\Http\Controllers;

use App\Models\Listing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //what to show on index page 
    {
        return inertia(
            'Listing/Index', //file path 
            [
                'listings' => Listing::all() //everything from listing table
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing) //show selected listing 
    {
        //
        return inertia(
            'Listing/Show', //file path 
            [
                'listing' => $listing //listing that matches id clicked  
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}