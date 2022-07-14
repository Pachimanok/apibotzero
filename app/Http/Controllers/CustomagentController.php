<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecustomagentRequest;
use App\Http\Requests\UpdatecustomagentRequest;
use App\Models\customagent;

class CustomagentController extends Controller
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
     * @param  \App\Http\Requests\StorecustomagentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecustomagentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customagent  $customagent
     * @return \Illuminate\Http\Response
     */
    public function show(customagent $customagent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customagent  $customagent
     * @return \Illuminate\Http\Response
     */
    public function edit(customagent $customagent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecustomagentRequest  $request
     * @param  \App\Models\customagent  $customagent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecustomagentRequest $request, customagent $customagent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customagent  $customagent
     * @return \Illuminate\Http\Response
     */
    public function destroy(customagent $customagent)
    {
        //
    }
}
