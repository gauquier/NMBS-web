<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use \SimpleXMLElement;


class treinInfo extends Controller
{
	public function getTrein(Request $request){

		$this->validate($request, [
            'nummer' => 'required|max:4',
            
        ]);

        $client = new Client(['base_uri' => 'https://api.irail.be/vehicle/']);
		$response = $client->get('?id=BE.NMBS.'.$request->get('nummer').'&format=json');
		$data = $response->getBody();
		
		return view('trein.treinInfoResponse')->with('data', json_decode($data, true) );
    }
}
