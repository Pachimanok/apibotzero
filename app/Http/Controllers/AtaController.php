<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ata;


class AtaController extends Controller
{
    public function index()
    {
        $atas = DB::table('atas')->get();       
        return $atas;
    }

    public function show($id)
    {
        $ata = DB::table('atas')->where('id','=',$id)->get();
        return $ata;
    }

    public function store(Request $request)
    {
        $ata = new Ata();
        $ata->razon_social = $request['razon_social'];
        $ata->tax_id= $request['tax_id'];
        $ata->provincia = $request['provincia'];
        $ata->phone = $request['phone'];
        $ata->pais = $request['pais'];
        $ata->mail = $request['mail'];
        $ata->user = $request['user'];
        $ata->empresa = $request['empresa'];
        $ata->save();

        return $ata;
    }

    public function update(Request $request, $id)
    {
        $ata = Ata::findOrFail($id);
        $ata->razon_social = $request['razon_social'];
        $ata->tax_id= $request['tax_id'];
        $ata->provincia = $request['provincia'];
        $ata->phone = $request['phone'];
        $ata->pais = $request['pais'];
        $ata->mail = $request['mail'];
        $ata->user = $request['user'];
        $ata->empresa = $request['empresa'];
        $ata->save();

        return $ata;

    }

    public function destroy($id)
    {
        Ata::destroy($id);

        $existe = Ata::find($id);
        if($existe){
            return 'No se elimino el Agente de Transporte';
        }else{
            return 'Se elimino el Agente de Transporte';
        };
    }

}
