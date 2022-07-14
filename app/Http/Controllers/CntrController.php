<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecntrRequest;
use App\Http\Requests\UpdatecntrRequest;
use App\Models\cntr;

class CntrController extends Controller
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
     * @param  \App\Http\Requests\StorecntrRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecntrRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cntr  $cntr
     * @return \Illuminate\Http\Response
     */
    public function show(cntr $cntr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cntr  $cntr
     * @return \Illuminate\Http\Response
     */
    public function edit(cntr $cntr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecntrRequest  $request
     * @param  \App\Models\cntr  $cntr
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecntrRequest $request, cntr $cntr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cntr  $cntr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cntr $cntr)
    {
        //
    }
}
