<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Carga;

class CargaController extends Controller
{
    public function indexStatus($status)
    {
        $carga = DB::table('carga')->where('status','=',$status)->get();

        return $carga;
    }

    public function indexStatusEmpresa($empresa, $status)
    {
        $carga = DB::table('carga')->where('status','=',$status) ->where('empresa','=',$empresa)->get();

        return $carga;
    }
}
