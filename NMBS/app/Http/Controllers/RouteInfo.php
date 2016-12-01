<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use \SimpleXMLElement;
use Input;

class RouteInfo extends Controller
{
	public function getRoute(Request $request){
		$client = new Client(['base_uri' => 'https://api.irail.be/connections/']);
		$response = $client->get('?to={'.$request->input('van').'}&from={'.$request->input('naar').'}');
		$data = $response->getBody();

		return view('route.routeInfo')->with('data', json_decode($data, true) );
	}	

	public function getAllStations(){
		$client = new Client(['base_uri' => 'http://data.irail.be/NMBS/']);
		$response = $client->get('Stations.json');
		$data = $response->getBody();

		return view('route.routeInfo')->with('data', json_decode($data, true) );
	}	
}