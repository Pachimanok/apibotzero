<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecshipperRequest;
use App\Http\Requests\UpdatecshipperRequest;
use App\Models\cshipper;

class CshipperController extends Controller
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
     * @param  \App\Http\Requests\StorecshipperRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecshipperRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cshipper  $cshipper
     * @return \Illuminate\Http\Response
     */
    public function show(cshipper $cshipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cshipper  $cshipper
     * @return \Illuminate\Http\Response
     */
    public function edit(cshipper $cshipper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecshipperRequest  $request
     * @param  \App\Models\cshipper  $cshipper
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecshipperRequest $request, cshipper $cshipper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cshipper  $cshipper
     * @return \Illuminate\Http\Response
     */
    public function destroy(cshipper $cshipper)
    {
        //
    }
}
