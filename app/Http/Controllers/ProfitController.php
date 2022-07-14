<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreprofitRequest;
use App\Http\Requests\UpdateprofitRequest;
use App\Models\profit;

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreprofitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreprofitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function show(profit $profit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function edit(profit $profit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateprofitRequest  $request
     * @param  \App\Models\profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateprofitRequest $request, profit $profit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profit  $profit
     * @return \Illuminate\Http\Response
     */
    public function destroy(profit $profit)
    {
        //
    }
}
