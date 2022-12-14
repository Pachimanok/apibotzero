<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\paytime;

class PayTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paytimes = DB::table('paytimes')->get();

        return $paytimes;
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
        $paytime = new paytime();
        $paytime->title = $request['title'];
        $paytime->description = $request['description'];
        $paytime->user = $request['user'];
        $paytime->empresa = $request['empresa'];
        $paytime->save();
        return $paytime;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paytime = DB::table('paytimes')->where('id','=',$id)->get();

        return $paytime;
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
        $paytime = paytime::findOrFail($id);

        $paytime->title = $request['title'];
        $paytime->description = $request['description'];
        $paytime->save();
        return $paytime;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        paytime::destroy($id);

        $existe = paytime::find($id);
        if($existe){
            return 'No se elimino el Plazo de Pago';
        }else{
            return 'Se elimino el Plazo de Pago';
        };
    }
}
