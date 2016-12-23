<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use \SimpleXMLElement;
use Input;
use DateTime;

class stationInfo extends Controller
{
	public function getStation(Request $request){

		

		try {
			$client = new Client(['base_uri' => 'https://api.irail.be/liveboard/']);
			$input =$request->input('select');
			$datetime = new DateTime();
			$newdate = str_replace("-", "", $request->input('date'));
			$newtime = date("Hi", strtotime($request->input('time')));
			if ($input == 'Vertrek')
			{
				$response = $client->get('?station='.$request->input('Station').'&date='.$newdate.'&time='.$newtime.'&arrdep=DEP&fast=true&format=json');
				$dep = 'Vertrek';
			}
			else
			{
				$response = $client->get('?station='.$request->input('Station').'&date='.$newdate.'&time='.$newtime.'&arrdep=ARR&fast=true&format=json');
				$dep = 'Aankomst';
			}
			$data = $response->getBody();
		} catch(\Exception $e) {
            return view('station.stationInfoResponse')->withErrors($e);
		}

		return view('station.stationInfoResponse')->with(['data'=>json_decode($data, true),'dep'=>$dep]);
	}

	public function getAllStations(){
		$client = new Client(['base_uri' => 'http://data.irail.be/NMBS/']);
		$response = $client->get('Stations.json');
		$data = $response->getBody();

		return view('station.stationInfo')->with('data', json_decode($data, true));
	}	
}