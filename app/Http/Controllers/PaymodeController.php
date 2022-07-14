<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepaymodeRequest;
use App\Http\Requests\UpdatepaymodeRequest;
use App\Models\paymode;

class PaymodeController extends Controller
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
     * @param  \App\Http\Requests\StorepaymodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepaymodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paymode  $paymode
     * @return \Illuminate\Http\Response
     */
    public function show(paymode $paymode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paymode  $paymode
     * @return \Illuminate\Http\Response
     */
    public function edit(paymode $paymode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepaymodeRequest  $request
     * @param  \App\Models\paymode  $paymode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepaymodeRequest $request, paymode $paymode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paymode  $paymode
     * @return \Illuminate\Http\Response
     */
    public function destroy(paymode $paymode)
    {
        //
    }
}
