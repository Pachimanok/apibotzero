<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreportRequest;
use App\Http\Requests\UpdateportRequest;
use App\Models\port;

class PortController extends Controller
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
     * @param  \App\Http\Requests\StoreportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function show(port $port)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function edit(port $port)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateportRequest  $request
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateportRequest $request, port $port)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\port  $port
     * @return \Illuminate\Http\Response
     */
    public function destroy(port $port)
    {
        //
    }
}
