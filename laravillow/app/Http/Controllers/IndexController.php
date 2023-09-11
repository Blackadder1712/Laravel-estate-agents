<?php

namespace App\Http\Controllers;



class IndexController extends Controller
{
    public function index() //what to show on page 
    {
        return inertia('Index/Index'); //file path 
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}