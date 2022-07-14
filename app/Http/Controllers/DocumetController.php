<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoredocumetRequest;
use App\Http\Requests\UpdatedocumetRequest;
use App\Models\documet;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class DocumetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($booking,$user)
    {

        $permiso = DB::table('users')->select('permiso')->where('username','=',$user)->get();

        if( $permiso[0]->permiso == 'ata'){

            $documet = documet::where(['booking' => $booking, 'eliminado' => 0, 'user'=> $user])->get();
            return $documet->toJson();

        }else{

            $documet = documet::where(['booking' => $booking, 'eliminado' => 0, 'cntr' => null])->get();
            return $documet->toJson();
        }
        
    }
    public function indexCntr($booking,$user,$cntr)
    {

        $permiso = DB::table('users')->select('permiso')->where('username','=',$user)->get();

        if( $permiso[0]->permiso == 'ata'){

            $documet = documet::where(['booking' => $booking, 'eliminado' => 0, 'user'=> $user,'cntr' => $cntr])->get();
            return $documet->toJson();

        }else{

            $documet = documet::where(['booking' => $booking, 'eliminado' => 0,'cntr' => $cntr])->get();
            return $documet->toJson();
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeAta(StoredocumetRequest $request,$booking)
    {
        
        $nameArchivo = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('public/'.$booking,$nameArchivo);
        $extension = $request->file('file')->getClientOriginalExtension();
        $user= $request['user'];
        
        $documet = new documet();
        $documet->name = $nameArchivo;
        $documet->doc = $nameArchivo;
        $documet->booking = $booking;
        $documet->extension = $extension;
        $documet->user = $user;
        $documet->save();
        
        return response()->json(['success'=>$nameArchivo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoredocumetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredocumetRequest $request, $booking)
    {
        $user= $request['user'];
        $nameArchivo = $request->file('file')->getClientOriginalName();
        

        if($request['cntr'] != '0' ) {

            $request->file('file')->storeAs('public/'.$booking.'/'.$request['cntr'],$nameArchivo);
            $extension = $request->file('file')->getClientOriginalExtension();
            
            $documet = new documet();
            $documet->name = $nameArchivo;
            $documet->doc = $nameArchivo;
            $documet->booking = $booking;
            $documet->cntr = $request['cntr'];
            $documet->user = $user;
            $documet->extension = $extension;
            $documet->save();

            return response()->json(['success'=>$nameArchivo]);


        } else {

            $request->file('file')->storeAs('public/'.$booking,$nameArchivo);
            $extension = $request->file('file')->getClientOriginalExtension();

            $documet = new documet();
            $documet->name = $nameArchivo;
            $documet->doc = $nameArchivo;
            $documet->booking = $booking;
            $documet->extension = $extension;
            $documet->user = $user;
            
            $documet->save();
            
            return response()->json(['success'=>$nameArchivo]);

        }
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documet  $documet
     * @return \Illuminate\Http\Response
     */
    public function show(documet $documet)
    {
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documet  $documet
     * @return \Illuminate\Http\Response
     */
    public function edit(documet $documet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedocumetRequest  $request
     * @param  \App\Models\documet  $documet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedocumetRequest $request, documet $documet,$booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documet  $documet
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoredocumetRequest $request)
    {
        $link = $request['link'];
        $id = $request['id'];

        $doc = documet::find($id);
        $doc->eliminado = 1;
        $doc->save();

        return Redirect::to($link); 

    }
}
