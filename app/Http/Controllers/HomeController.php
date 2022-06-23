<?php

namespace App\Http\Controllers;

use App\Models\BTSLocation;
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
        // $this->middleware('auth');
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

    public function page_count() {
        $loc = BTSLocation::get();
        // dd($loc);
        return view ('pathloss.data', [
            'locations' => $loc,
        ]);
    }
}
