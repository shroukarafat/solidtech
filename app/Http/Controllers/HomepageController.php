<?php

namespace App\Http\Controllers;

use App\Models\homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.index');
    }

    public function aboutUs()
    {
        return view('front.about-us');
    }

    public function contactUs()
    {
        return view('front.contact-us');
    }

    public function portfolio()
    {
        return view('front.port');
    }
}