<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->email=='joseflim@timesprinters.com')
            return redirect('dashboard');
        if(Auth::user()->email=='poojasm@timesprinters.com')
            return redirect('adashboard');
        if(Auth::user()->email=='aaron.theam@timesprinters.com')
            return redirect('sdashboard');
    }
}
