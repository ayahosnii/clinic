<?php

namespace App\Http\Controllers;

use App\Models\Dentist;

class HomeController extends Controller
{
    public function index()
    {
        $dentists = Dentist::get();
        return view('front.home2',compact('dentists'));
    }
}
