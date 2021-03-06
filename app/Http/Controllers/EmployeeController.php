<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('theme_a::employee/index');
    }
    
    public function semployee()
    {
        //
        return view('theme_s::employee/index');
    }
    
    public function delivery()
    {
        //
        return view('theme_a::employee/delivery');
    }
    
    public function sdelivery()
    {
        //
        return view('theme_s::employee/delivery');
    }
    
    public function udelivery()
    {
        //
        return view('theme_u::delivery/index');
    }
    
    public function sinvoice()
    {
        //
        return view('theme_s::employee/invoice');
    }
    
    public function ainvoice()
    {
        //
        return view('theme_a::employee/invoice');
    }
    public function company()
    {
        //
        return view('theme_s::employee/company');
    }
    public function admin()
    {
        //
        return view('theme_s::employee/admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}

