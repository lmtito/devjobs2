<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function featured()
    {
        return view('featured');
    }

    public function offers()
    {
        $jobOffers = JobOffer::latest()->where('active', true)->take(5)->get();

        return view('offers', compact('jobOffers'));
    }

    public function apply()
    {
        return view('form');
    }
}
