<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use \SimpleXMLElement;

class stationInfo extends Controller
{
	public function getStation(){
		$client = new Client(['base_uri' => 'https://api.irail.be/liveboard/']);
		$response = $client->get('?station=Brussels&fast=true');
		$data = new SimpleXMLElement((string) $response->getBody());
		
		// if ($response->getBody()) {
		//    echo $response->getBody();
		    // JSON string: { ... }
		// }

		return view('station.stationInfoResponse')->with('data', $data );
	}
}