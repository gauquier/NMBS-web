<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use \SimpleXMLElement;
use Validator;


class treinInfo extends Controller
{
	public function getTrein(Request $request){

		try {
		  	$client = new \GuzzleHttp\Client(['http_errors' => false]);
	        $client = new Client(['base_uri' => 'https://api.irail.be/vehicle/']);
			$response = $client->get('?id=BE.NMBS.'.$request->get('nummer').'&format=json');
			$data = $response->getBody();
		} catch(\Exception $e) {
            return view('trein.treinInfo')->withErrors($e);
		}
		
		return view('trein.treinInfoResponse')->with('data', json_decode($data, true) );
		
    }
}
