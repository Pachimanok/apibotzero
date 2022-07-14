<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreinstructionRequest;
use App\Http\Requests\UpdateinstructionRequest;
use App\Models\instruction;

class InstructionController extends Controller
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
     * @param  \App\Http\Requests\StoreinstructionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreinstructionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function show(instruction $instruction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function edit(instruction $instruction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinstructionRequest  $request
     * @param  \App\Models\instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateinstructionRequest $request, instruction $instruction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\instruction  $instruction
     * @return \Illuminate\Http\Response
     */
    public function destroy(instruction $instruction)
    {
        //
    }
}
