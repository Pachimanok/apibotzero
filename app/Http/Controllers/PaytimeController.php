<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepaytimeRequest;
use App\Http\Requests\UpdatepaytimeRequest;
use App\Models\paytime;

class PaytimeController extends Controller
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
     * @param  \App\Http\Requests\StorepaytimeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaytimeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paytime  $paytime
     * @return \Illuminate\Http\Response
     */
    public function show(paytime $paytime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paytime  $paytime
     * @return \Illuminate\Http\Response
     */
    public function edit(paytime $paytime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaytimeRequest  $request
     * @param  \App\Models\paytime  $paytime
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaytimeRequest $request, paytime $paytime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paytime  $paytime
     * @return \Illuminate\Http\Response
     */
    public function destroy(paytime $paytime)
    {
        //
    }
}
