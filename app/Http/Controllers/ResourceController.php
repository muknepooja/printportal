<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	if (Auth::user()->web == 'superadmin') {
    		return redirect()->action('ApprovalController@index');
    	}
    	elseif (Auth::user()->web == 'admin') {
    		return redirect()->action('EmployeeController@index');
    	}
    	else {
    		return redirect()->action('OrderController@index');
    	}
    	
    }
}
