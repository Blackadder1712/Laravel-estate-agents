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
        return inertia('Listing/Create');// show on create page 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Listing::create(
        $request->validate([
            'beds' => 'required|integer|min:0|max:20',
            'baths' => 'required|integer|min:0|max:20',
            'area' => 'required|integer|min:15|max:1500',
            'city' => 'required',
            'code' => 'required',
            'street' => 'required',
            'street_nr' => 'required|min:1|max:1000',
            'price' => 'required|integer|min:1|max:20000000',
        ])
    );

      return redirect()->route('listing.index')
      ->with('success', 'Listing was created!');
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

    public function edit(Listing $listing)
    {
        //render edit page
        return inertia(
            'Listing/Edit', //file path 
            [
                'listing' => $listing //listing that matches id clicked  
            ]);
    }

  
    public function update(Request $request, Listing $listing) // listing from list of listings 
    {
        // modify listing
        $listing->update( //update single listing 
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:15|max:1500',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_nr' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ])
        );
    
          return redirect()->route('listing.index')
          ->with('success', 'Listing was changed!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing) //delete listing 
    {
       $listing->delete(); //

       return redirect()->back() // go back to main page with message 
       ->with('success', 'Listing has been deleted!');
    }
}
