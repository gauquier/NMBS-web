<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;

class treinInfo extends Controller
{
	public function getTrein(){

        $client = new Client(['base_uri' => 'https://api.irail.be/vehicle/']);
		$response = $client->get('?id=BE.NMBS.P1234');
		$data = $response->getBody();
		$data = json_decode($data, true);
		print_r($data);
		error_log($data);
		if ($response->getBody()) {
		    echo $response->getBody();
		    // JSON string: { ... }
		}

		return view('station.stationInfoResponse')->with('data', json_decode($data, true));
	}
    
}
