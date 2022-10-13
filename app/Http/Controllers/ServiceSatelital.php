<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use LDAP\Result;

class ServiceSatelital extends Controller
{
    public function serviceSatelital(){

        $client = new Client();
        $headers = [
        'Content-Type' => 'application/json'
        ];
        $body = '{"patentes":["AE792WJ"], 
        "cercania":true, 
        "domiclio":false,
        "apiKey":"a4f0a4e8e5d34e5b7b7bc16dab941060a5c848c9"
        }';
        $request = new Psr7Request('POST', 'https://app.akercontrol.com/ws/v2/servicios', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        $respuesta = $res->getBody();
        $r = json_decode($respuesta, true);
        $datosAker = $r['data'];
        $datosPatente = $datosAker['AE792WJ'];
        $latAker = $datosPatente['ult_latitud'];
        $lngAker = $datosPatente['ult_longitud'];

        $clientBOT = new Client();
        $requestBOT = new Psr7Request('GET', 'https://botzero.ar/api/lugarDeCarga/'.'AE792WJ');
        $resBOT = $client->sendAsync($requestBOT)->wait();
        $respuestaBOT = $resBOT->getBody();
        $rBOT = json_decode($respuestaBOT, true);
        $rBOT = $rBOT[0];
        $latCarga = $rBOT['lat'];
        $lngCarga = $rBOT['lon'];
        $lugarCarga = $rBOT['load_place'];
        $lugarAduana = $rBOT['custom_place'];
        $latAduana = $rBOT['latA'];
        $lngAduana = $rBOT['lonA'];
        $lugarDescarga = $rBOT['unload_place'];
        $latDescarga = $rBOT['latU'];
        $lonDescarga = $rBOT['lonU'];
        $IdTrip = $rBOT['IdTrip'];

       


		$Radio = 6371e3; // metres
		$φ1 = $latAker * pi() / 180; // φ, λ in radians
        $φ2 = $latCarga * pi() / 180;
		$φ3 = $latAduana * pi() / 180;
		$φ4 = $latDescarga * pi() / 180;

		$Δφ = ($latAker - $latCarga) * pi() / 180;
		$Δφ2 = ($latAker - $latAduana) * pi() / 180;
		$Δφ3 = ($latAker - $latDescarga) * pi() / 180;

		$Δλ = ($lngAker - $lngCarga) * pi() / 180;
		$Δλ2 = ($lngAker - $lngAduana) * pi() / 180;
		$Δλ3 = ($lngAker - $lonDescarga) * pi() / 180;

		$a = sin($Δφ / 2) * sin($Δφ / 2) + cos($φ1) *cos($φ2) * sin($Δλ / 2) * sin($Δλ / 2);
		$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
		$d = $Radio * $c; // in metres
        
		$a2 = sin($Δφ2 / 2) * sin($Δφ2 / 2) + cos($φ1) * cos($φ3) * sin($Δλ2 / 2) * sin($Δλ2 / 2);
        $c2 = 2 * atan2(sqrt($a2), sqrt(1 - $a2));
        $d2 = $Radio * $c2; // in metres

		$a3 = sin($Δφ3 / 2) * sin($Δφ3 / 2) + cos($φ1) * cos($φ4) * sin($Δλ3 / 2) * sin($Δλ3 / 2);
		$c3 = 2 * atan2(sqrt($a3), sqrt(1 - $a3));
		$d3 = $Radio * $c3; // in metres */

        if ($d <= 50) {

            $clientCarga = new Client();
            $requestCarga = new Psr7Request('GET', 'https://botzero.ar/api/accionLugarDeCarga/'.$IdTrip);
            $resCarga = $clientCarga->sendAsync($requestCarga)->wait();
            return $resCarga;
           
        }
       
        if ($d2 <= 50) {

            $clientAduana = new Client();
            $requestAduana = new Psr7Request('GET', 'https://botzero.ar/api/accionLugarAduana/'.$IdTrip);
            $resAduana = $clientAduana->sendAsync($requestAduana)->wait();
            return $resAduana;

        } 
        if ($d3 <= 50) {

            $clientDescarga = new Client();
            $requestDescarga = new Psr7Request('GET', 'https://botzero.ar/api/accionLugarDescarga/'.$IdTrip);
            $resDescarga = $clientDescarga->sendAsync($requestDescarga)->wait();
            return $resDescarga;

        }

        return 'no esta en ningun punto';

    }
}
