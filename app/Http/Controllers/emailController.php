<?php

namespace App\Http\Controllers;

use App\Mail\CargaConProblemas;
use App\Mail\correoDePrueba;
use App\Models\logapi;
use App\Models\statu;
use Carbon\Carbon;
use DateTimeZone;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;
use Illuminate\Support\Facades\Mail;

class emailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function prueba()
    {
        return $_GET['description'];

        Mail::to('priopelliza@gmail.com')->send(new correoDePrueba);

        return 'mensaje enviado';
    }
    public function cambiaStatus()
    {
       
        $logapi = new logapi();
        $logapi->user = $_GET['user'];
        $logapi->detalle = 'Satatus con Problema';
        $logapi->save();
        $date = Carbon::now('-03:00');
        
        $datos = [

            'cntr' => $_GET['cntr'],
            'statusGeneral' => $_GET['statusGeneral'],
            'description' =>  $_GET['description'],
            'user' => $_GET['user'],
            'empresa' => $_GET['empresa'],
            'booking' => $_GET['booking'],
            'date' => $date
            
        ];

        Mail::to('priopelliza@gmail.com')->send(new CargaConProblemas($datos)); 

        return '{
            "success": true,
            "payload": {
              /* Application-specific data would go here. */
            }
          }'; 
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
