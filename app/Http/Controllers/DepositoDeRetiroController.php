<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DepositoDeRetiro;

class DepositoDeRetiroController extends Controller
{
    public function index()
    {
        $depositoRetiro = DB::table('deposito_de_retiros')->get();       
        return $depositoRetiro;
    }

    public function show($id)
    {
        $depositoRetiro = DB::table('deposito_de_retiros')->where('id','=',$id)->get();
        return $depositoRetiro;
    }

    public function store(Request $request)
    {
        $depositoRetiro = new DepositoDeRetiro();
        $depositoRetiro->title = $request['title'];
        $depositoRetiro->address = $request['address'];
        $depositoRetiro->country= $request['country'];
        $depositoRetiro->city = $request['city'];
        $depositoRetiro->km_from_town = $request['km_from_town'];
        $depositoRetiro->lat_lon = $request['lat_lon'];
        $depositoRetiro->link_maps = $request['link_maps'];
        $depositoRetiro->user = $request['user'];
        $depositoRetiro->empresa = $request['empresa'];
        $depositoRetiro->save();

        return $depositoRetiro;
    }

    public function update(Request $request, $id)
    {
        $depositoRetiro = DepositoDeRetiro::findOrFail($id);
        $depositoRetiro->title = $request['title'];
        $depositoRetiro->address = $request['address'];
        $depositoRetiro->country= $request['country'];
        $depositoRetiro->city = $request['city'];
        $depositoRetiro->km_from_town = $request['km_from_town'];
        $depositoRetiro->lat_lon = $request['lat_lon'];
        $depositoRetiro->link_maps = $request['link_maps'];
        $depositoRetiro->user = $request['user'];
        $depositoRetiro->empresa = $request['empresa'];
        $depositoRetiro->save();

        return $depositoRetiro;

    }

    public function destroy($id)
    {
        DepositoDeRetiro::destroy($id);

        $existe = DepositoDeRetiro::find($id);
        if($existe){
            return 'No se elimino el Deposito de Retiro';
        }else{
            return 'Se elimino el Deposito de Retiro';
        };
    }
}
