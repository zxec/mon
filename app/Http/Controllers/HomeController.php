<?php

namespace App\Http\Controllers;

use App\Models\Skdesk\City;
use App\Models\Skdesk\Apply;
use Illuminate\Http\Request;
use App\Models\Monitoring;
use App\Models\Skdesk\Master;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $first = Monitoring::find(1871150);

        // $apply= Master::find(3);
        // dd($apply->city()->first()->name);
        return view('home');
    }
}
