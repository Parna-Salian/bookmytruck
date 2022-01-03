<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPlace extends Controller
{
    public function index()
    {
        return view("marketplace");
    }
    public function enquiry()
    {
        return view("shipper.enquiry");
    }
}
