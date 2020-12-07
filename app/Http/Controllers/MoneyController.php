<?php

namespace App\Http\Controllers;

use App\money;
use Illuminate\Http\Request;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $moneys = Money::all();

        return view('bendaharabiro.uangkas', compact('moneys'));

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
     * @param  \App\money  $money
     * @return \Illuminate\Http\Response
     */
    public function show(money $money)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\money  $money
     * @return \Illuminate\Http\Response
     */
    public function edit(money $money)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\money  $money
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, money $money)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\money  $money
     * @return \Illuminate\Http\Response
     */
    public function destroy(money $money)
    {
        //
    }
}
