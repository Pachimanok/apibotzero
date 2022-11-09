<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreloadRequest;
use App\Http\Requests\UpdateloadRequest;
use App\Models\load;
use App\Models\trip;
use Illuminate\Support\Facades\DB;

class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Filtrar por semanas y traer esas cargas. 
            // show (mostrar el detalle de la carga mas el detalle de cada uno de los contendores y los documentos.)
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
     * @param  \App\Http\Requests\StoreloadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreloadRequest $request/* , $type */)
    {

     
        /* 
            OE = OceansExpo +
            OI = OceansImpo +
            IE = InlandExpo +
            II = InlandImpo +
            FO = FOB +
            LC = LCL

        */
        $type = $request->json()->get("type"); 
        
        if($type == 'OE' || $type == 'FO'){

            $ref_customer = $request->json()->get("ref_customer");
            $shipper = $request->json()->get("shipper");
            $reference_load = $request->json()->get("reference_load"); 
            $commodity = $request->json()->get("commodity");
            $customer = $request->json()->get("customer");
            $load_place = $request->json()->get("load_place");
            $load_date = $request->json()->get("load_date");
            $download_date = $request->json()->get("download_date");
            $download_place = $request->json()->get("download_place");
            $cut_off_doc = $request->json()->get("cut_off_doc");
            $cut_off_fis = $request->json()->get("cut_off_fis");
            $oceans_line = $request->json()->get("oceans_line");
            $vessel = $request->json()->get("vessel");
            $voyage = $request->json()->get("voyage");
            $last_place = $request->json()->get("last_place");
            $ETA = $request->json()->get("ETA");
            $ETD = $request->json()->get("ETD");
            $consignee = $request->json()->get("consignee");
            $notify = $request->json()->get("notify");
            $custom_place = $request->json()->get("custom_place");
            $custom_agent = $request->json()->get("custom_agent");
            $observation_customer = $request->json()->get("observation_customer");
            $user = $request->json()->get("user");
            $company = $request->json()->get("company");

            $load = new load();
            $load->ref_customer = $ref_customer;
            $load->reference = $reference_load;
            $load->shipper = $shipper;
            $load->commodity = $commodity;
            $load->customer = $customer;
            $load->load_place = $load_place;
            $load->load_date = $load_date;
            $load->download_place = $download_place;
            $load->download_date = $download_date;
            $load->cut_off_fis = $cut_off_fis;
            $load->cut_off_doc = $cut_off_doc;
            $load->oceans_line = $oceans_line;
            $load->vessel = $vessel;
            $load->voyage = $voyage;
            $load->last_place = $last_place;
            $load->ETA = $ETA ;
            $load->ETD = $ETD ;
            $load->consignee = $consignee ;
            $load->notify = $notify ;
            $load->custom_place = $custom_place ;
            $load->custom_agent = $custom_agent ;
            $load->observation_customer = $observation_customer ;
            $load->user = $user ;
            $load->company = $company;
            $load->type = $type;
            $load->save();
    

        } elseif( $type == 'OI') {

            $ref_customer = $request->json()->get("ref_customer");
            $customer = $request->json()->get("customer");
            $shipper = $request->json()->get("shipper");
            $reference_load = $request->json()->get("reference_load"); 
            $commodity = $request->json()->get("commodity");
            $load_place = $request->json()->get("load_place");
            $load_date = $request->json()->get("load_date");
            $download_date = $request->json()->get("download_date");
            $download_place = $request->json()->get("download_place");
            $oceans_line = $request->json()->get("oceans_line");
            $vessel = $request->json()->get("vessel");
            $voyage = $request->json()->get("voyage");
            $last_place = $request->json()->get("last_place");
            $ETA = $request->json()->get("ETA");
            $ETD = $request->json()->get("ETD");
            $consignee = $request->json()->get("consignee");
            $notify = $request->json()->get("notify");
            $custom_place = $request->json()->get("custom_place");
            $custom_agent = $request->json()->get("custom_agent");
            $custom_place_impo = $request->json()->get("custom_place_impo");
            $custom_agent_impo = $request->json()->get("custom_agent_impo");
            $observation_customer = $request->json()->get("observation_customer");
            $user = $request->json()->get("user");
            $company = $request->json()->get("company");

            $load = new load();
            $load->ref_customer = $ref_customer;
            $load->reference = $reference_load;
            $load->shipper = $shipper;
            $load->commodity = $commodity;
            $load->customer = $customer;
            $load->load_place = $load_place;
            $load->load_date = $load_date;
            $load->download_place = $download_place;
            $load->download_date = $download_date;
            $load->oceans_line = $oceans_line;
            $load->vessel = $vessel;
            $load->voyage = $voyage;
            $load->last_place = $last_place;
            $load->ETA = $ETA ;
            $load->ETD = $ETD ;
            $load->consignee = $consignee ;
            $load->notify = $notify ;
            $load->custom_place = $custom_place ;
            $load->custom_agent = $custom_agent ;
            $load->custom_place_impo = $custom_place_impo ;
            $load->custom_agent_impo = $custom_agent_impo ;
            $load->observation_customer = $observation_customer ;
            $load->user = $user ;
            $load->company = $company;
            $load->type = $type;
            $load->save();
           

        } elseif( $type == 'II' ||  $type == 'IE' ) {


            $ref_customer = $request->json()->get("ref_customer");
            $shipper = $request->json()->get("shipper");
            $customer = $request->json()->get("customer");
            $reference_load = $request->json()->get("reference_load"); 
            $commodity = $request->json()->get("commodity");
            $load_place = $request->json()->get("load_place");
            $load_date = $request->json()->get("load_date");
            $download_date = $request->json()->get("download_date");
            $download_place = $request->json()->get("download_place");
            $custom_place = $request->json()->get("custom_place");
            $custom_agent = $request->json()->get("custom_agent");
            $custom_place_impo = $request->json()->get("custom_place_impo");
            $custom_agent_impo = $request->json()->get("custom_agent_impo");
            $observation_customer = $request->json()->get("observation_customer");
            $user = $request->json()->get("user");
            $company = $request->json()->get("company");

            $load = new load();
            $load->ref_customer = $ref_customer;
            $load->reference = $reference_load;
            $load->shipper = $shipper;
            $load->commodity = $commodity;
            $load->customer = $customer;
            $load->load_place = $load_place;
            $load->load_date = $load_date;
            $load->download_place = $download_place;
            $load->download_date = $download_date;
            $load->custom_place = $custom_place ;
            $load->custom_agent = $custom_agent ;
            $load->custom_place_impo = $custom_place_impo ;
            $load->custom_agent_impo = $custom_agent_impo ;
            $load->observation_customer = $observation_customer ;
            $load->user = $user ;
            $load->company = $company;
            $load->type = $type;
            $load->save();
           

        } elseif( $type == 'NA') {
            
            $ref_customer = $request->json()->get("ref_customer");
            $shipper = $request->json()->get("shipper");
            $customer = $request->json()->get("customer");
            $reference_load = $request->json()->get("reference_load"); 
            $commodity = $request->json()->get("commodity");
            $load_place = $request->json()->get("load_place");
            $load_date = $request->json()->get("load_date");
            $download_date = $request->json()->get("download_date");
            $download_place = $request->json()->get("download_place");
            $observation_customer = $request->json()->get("observation_customer");
            $user = $request->json()->get("user");
            $company = $request->json()->get("company");

            $load = new load();
            $load->ref_customer = $ref_customer;
            $load->reference = $reference_load;
            $load->shipper = $shipper;
            $load->commodity = $commodity;
            $load->customer = $customer;
            $load->load_place = $load_place;
            $load->load_date = $load_date;
            $load->download_place = $download_place;
            $load->download_date = $download_date;
            $load->observation_customer = $observation_customer ;
            $load->user = $user ;
            $load->company = $company;
            $load->type = $type;
            $load->save();
        }
        
        $number_of_trip = $request->json()->get("number_of_trip");

        for($i = 1;$i<= $number_of_trip;$i++){
            
            $trip = new trip();
            $trip->reference_load = $reference_load;
            $trip->user_cntr = $user;
            $trip->company = $company;
            $trip->save();
        }


        return $load;
       /*  return $load; */
     
        
        /* de acurdo a la cantidad de trips llenar la tabla */

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\load  $load
     * @return \Illuminate\Http\Response
     */
    public function show(load $load)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\load  $load
     * @return \Illuminate\Http\Response
     */
    public function edit(load $load)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateloadRequest  $request
     * @param  \App\Models\load  $load
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateloadRequest $request, load $load)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\load  $load
     * @return \Illuminate\Http\Response
     */
    public function destroy(load $load)
    {
        //
    }
}
