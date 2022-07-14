<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoremessageinfoRequest;
use App\Http\Requests\UpdatemessageinfoRequest;
use App\Models\messageinfo;

class MessageinfoController extends Controller
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
     * @param  \App\Http\Requests\StoremessageinfoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremessageinfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\messageinfo  $messageinfo
     * @return \Illuminate\Http\Response
     */
    public function show(messageinfo $messageinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\messageinfo  $messageinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(messageinfo $messageinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemessageinfoRequest  $request
     * @param  \App\Models\messageinfo  $messageinfo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemessageinfoRequest $request, messageinfo $messageinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\messageinfo  $messageinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(messageinfo $messageinfo)
    {
        //
    }
}
