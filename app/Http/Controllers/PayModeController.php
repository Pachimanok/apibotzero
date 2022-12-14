<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paymode;

class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymodes = DB::table('paymodes')->get();

        return $paymodes;
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
        $paymode = new paymode();
        $paymode->title = $request['title'];
        $paymode->description = $request['description'];
        $paymode->user = $request['user'];
        $paymode->empresa = $request['empresa'];
        $paymode->save();
        return $paymode;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymode = DB::table('paymodes')->where('id','=',$id)->get();

        return $paymode;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paymode = paymode::findOrFail($id);

        $paymode->title = $request['title'];
        $paymode->description = $request['description'];
        $paymode->save();
        return $paymode;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        paymode::destroy($id);

        $existe = paymode::find($id);
        if($existe){
            return 'No se elimino el Modo de Pago';
        }else{
            return 'Se elimino el Modo de Pago';
        };
    }
}
