<?php

namespace App\Http\Controllers;

use App\AOrder;
use Illuminate\Http\Request;

class AOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('theme_uadmin::order/index');
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
     * @param  \App\AOrder  $aOrder
     * @return \Illuminate\Http\Response
     */
    public function show(AOrder $aOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AOrder  $aOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(AOrder $aOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AOrder  $aOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AOrder $aOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AOrder  $aOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(AOrder $aOrder)
    {
        //
    }
}
