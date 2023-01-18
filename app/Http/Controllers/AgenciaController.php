<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Agencia;

class AgenciaController extends Controller
{
    public function index()
    {
        $agencias = DB::table('agencias')->get();       
        return $agencias;
    }

    public function show($id)
    {
        $agencia = DB::table('agencias')->where('id','=',$id)->get();
        return $agencia;
    }

    public function store(Request $request)
    {
        $agencia = new Agencia();
        $agencia->description = $request['description'];
        $agencia->razon_social = $request['razon_social'];
        $agencia->tax_id= $request['tax_id'];
        $agencia->puerto = $request['puerto'];
        $agencia->contact_phone = $request['contact_phone'];
        $agencia->contact_name = $request['contact_name'];
        $agencia->contact_mail = $request['contact_mail'];
        $agencia->user = $request['user'];
        $agencia->empresa = $request['empresa'];
        $agencia->observation_gral = $request['observation_gral'];
        $agencia->save();

        return $agencia;
    }

    public function update(Request $request, $id)
    {
        $agencia = Agencia::findOrFail($id);
        $agencia->description = $request['description'];
        $agencia->razon_social = $request['razon_social'];
        $agencia->tax_id= $request['tax_id'];
        $agencia->puerto = $request['puerto'];
        $agencia->contact_phone = $request['contact_phone'];
        $agencia->contact_name = $request['contact_name'];
        $agencia->contact_mail = $request['contact_mail'];
        $agencia->user = $request['user'];
        $agencia->empresa = $request['empresa'];
        $agencia->observation_gral = $request['observation_gral'];
        $agencia->save();

        return $agencia;

    }

    public function destroy($id)
    {
        Agencia::destroy($id);

        $existe = Agencia::find($id);
        if($existe){
            return 'No se elimino la Agencia';
        }else{
            return 'Se elimino la Agencia';
        };
    }

}
