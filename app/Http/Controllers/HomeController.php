<?php

namespace App\Http\Controllers;

use App\HouseList;
use App\LandList;

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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $homes = HouseList::paginate(10);
        $lands = LandList::paginate(10);
        return view('dashboard', compact(['homes', 'lands']));
    }
}
