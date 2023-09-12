<?php

namespace App\Http\Controllers;
use App\Models\Listing;





class IndexController extends Controller
{
    public function index() //what to show on page 
    {
 
        return inertia(
        'Index/Index', //file path 
        [
            'message' => 'Hello from Laravel!'
        ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}