<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransporteController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transporte = new Transporte();
        $transporte->razon_social = $request['razon_social'];
        $transporte->CUIT = $request['CUIT'];
        $transporte->Direccion = $request['Direccion'];
        $transporte->pais = $request['pais'];
        $transporte->Provincia = $request['Provincia'];

        $transporte->contacto_logistica_nombre = $request['contacto_logistica_nombre'];
        $transporte->contacto_logistica_celular = $request['contacto_logistica_celular'];
        $transporte->contacto_logistica_mail = $request['contacto_logistica_mail'];

        $transporte->contacto_admin_nombre = $request['contacto_admin_nombre'];
        $transporte->contacto_admin_celular = $request['contacto_admin_celular'];
        $transporte->contacto_admin_mail = $request['contacto_admin_mail'];

        $transporte->user = $request['user'];
        $transporte->empresa = $request['empresa'];
        
        $transporte->save();

        return $transporte;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trans = DB::table('transportes')->where('id','=',$id)->get();

        return $trans;
    }

    public function indexTransporteCustomer($id_customer)
    {
        $transportes = DB::table('transportes')->where('customer_id','=',$id_customer)->get();

        return $transportes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Transporte $transporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transporte = Transporte::findOrFail($id);

        $transporte->razon_social = $request['razon_social'];
        $transporte->CUIT = $request['CUIT'];
        $transporte->Direccion = $request['Direccion'];
        $transporte->pais = $request['pais'];
        $transporte->Provincia = $request['Provincia'];

        $transporte->contacto_logistica_nombre = $request['contacto_logistica_nombre'];
        $transporte->contacto_logistica_celular = $request['contacto_logistica_celular'];
        $transporte->contacto_logistica_mail = $request['contacto_logistica_mail'];

        $transporte->contacto_admin_nombre = $request['contacto_admin_nombre'];
        $transporte->contacto_admin_celular = $request['contacto_admin_celular'];
        $transporte->contacto_admin_mail = $request['contacto_admin_mail'];

        $transporte->user = $request['user'];
        $transporte->empresa = $request['empresa'];
        
        $transporte->save();

        return $transporte;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transporte  $transporte
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transporte::destroy($id);

        $existe = Transporte::find($id);
        if($existe){
            return 'No se elimino el Transporte';
        }else{
            return 'Se elimino el Transporte';
        };
    }
}
