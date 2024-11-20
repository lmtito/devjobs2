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
        $jobOffers = JobOffer::latest()->where('is_featured', true)->take(2)->get();

        return view('featured', compact('jobOffers'));
    }

    public function offers()
    {
        $jobOffers = JobOffer::latest()->where('is_active', true)->take(5)->get();

        return view('offers', compact('jobOffers'));
    }

    public function apply()
    {
        return view('form');
    }
}
