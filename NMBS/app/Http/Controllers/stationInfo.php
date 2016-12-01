<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use \SimpleXMLElement;
use Input;

class stationInfo extends Controller
{
	public function getStation(Request $request){

		$client = new Client(['base_uri' => 'https://api.irail.be/liveboard/']);
		$response = $client->get('?station='.$request->input('Station').'&fast=true&format=json');
		$data = $response->getBody();
		
		return view('station.stationInfoResponse')->with('data', json_decode($data, true));
	}

	public function getAllStations(){
		$client = new Client(['base_uri' => 'http://data.irail.be/NMBS/']);
		$response = $client->get('Stations.json');
		$data = $response->getBody();

		return view('station.stationInfo')->with('data', json_decode($data, true) );
	}	
}