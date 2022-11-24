<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\empresa;


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = DB::table('empresas')->get();

        return $empresas;
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
        
        $empresa = new empresa();
        $empresa->razon_social = $request['razon_social'];
        $empresa->CUIT = $request['CUIT'];
        $empresa->IIBB = $request['IIBB'];
        $empresa->mail_admin = $request['mail_admin'];
        $empresa->mail_logistic = $request['mail_logistic'];
        $empresa->name_admin = $request['name_admin'];
        $empresa->name_logistic = $request['name_logistic'];
        $empresa->cel_admin = $request['cel_admin'];
        $empresa->cel_logistic = $request['cel_logistic'];
        $empresa->direccion = $request['direccion'];
        $empresa->user = $request['user'];
        $empresa->empresa = $request['empresa'];
        $empresa->pais = $request['pais'];
        $empresa->Provincia = $request['Provincia'];
        $empresa->save();

        return $empresa;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = DB::table('empresas')->where('id','=',$id)->get();
        return $empresa;
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
       $empresa = empresa::findOrFail($id);
       $empresa->razon_social = $request['razon_social'];
       $empresa->CUIT = $request['CUIT'];
       $empresa->IIBB = $request['IIBB'];
       $empresa->mail_admin = $request['mail_admin'];
       $empresa->mail_logistic = $request['mail_logistic'];
       $empresa->name_admin = $request['name_admin'];
       $empresa->name_logistic = $request['name_logistic'];
       $empresa->cel_admin = $request['cel_admin'];
       $empresa->cel_logistic = $request['cel_logistic'];
       $empresa->direccion = $request['direccion'];
       $empresa->user = $request['user'];
       $empresa->empresa = $request['empresa'];
       $empresa->pais = $request['pais'];
       $empresa->Provincia = $request['Provincia'];
       $empresa->save();

       return $empresa; 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        empresa::destroy($id);

        $existe = empresa::find($id);
        if($existe){
            return 'No se elimino la Empresa';
        }else{
            return 'Se elimino la Empresa';
        };
    }
}
