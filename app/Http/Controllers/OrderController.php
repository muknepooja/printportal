<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        //
        $items['data'] = [
            'name' => 'Lim Chee Siong Josef',
            'email' => 'joseflim@timesprinters.com',
            'designation' => 'Assistant Manager',
            'department' => 'Head of Digital Print',
            'tel' => '+65 8522 4716',
            'fax' => '+65 7472 6666',
            'did' => '+65 7472 7462',
            'main' => '+65 9999 9999',
            'ad1' => '666 Heaven Ave 666 Singapore 666666',
            'coreg' => '5496666694C',
        ];
        return view('theme_u::order/index', compact('items'));
    }

    public function profile() {
        //
        $items['data'] = [
           'name' => 'Lim Chee Siong Josef',
            'email' => 'joseflim@timesprinters.com',
            'designation' => 'Assistant Manager',
            'department' => 'Head of Digital Print',
            'tel' => '+65 8522 4716',
            'fax' => '+65 7472 6666',
            'did' => '+65 7472 7462',
            'main' => '+65 9999 9999',
            'ad1' => '666 Heaven Ave 666 Singapore 666666',
            'coreg' => '5496666694C',
        ];
        return view('theme_u::profile/index', compact('items'));
    }
    
    public function sdashboard() {
        return view('theme_s::index');
    }
    
    public function adashboard() {
        return view('theme_a::index');
    }
    
    public function dashboard() {
        return view('theme_u::index');
    }
    
    public function delivery() {
        return view('theme_u::delivery/index');
    }
    
    public function sorder() {
        return view('theme_s::order/index');
    }
    public function aorder() {
        return view('theme_a::order/index');
    }
    public function amanage() {
        return view('theme_s::order/manage');
    }
    public function smanage() {
        return view('theme_s::order/manage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order) {
        //
    }

}
