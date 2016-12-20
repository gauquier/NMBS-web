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
		$from = $request->input('van');
		$strFrom = substr($from, 8);
		$to = $request->input('naar');
		$strTo = substr($to, 8);
		$date = date('dmy', strtotime($request->input('date')));
		$newdate = str_replace("-", "", $request->input('date'));
		$time = date('Hi', strtotime($request->input('time')));
		$input =$request->input('select');
		if ($input == 'Vertrek')
		{
			$response = $client->get('?to='.$strTo.'&from='.$strFrom.'&date='.$newdate.'&time='.$time.'&arrdep=DEP&fast=true&format=json');
		}
		else
		{
			$response = $client->get('?to='.$strTo.'&from='.$strFrom.'&date='.$date.'&time='.$time.'&arrdep=DEP&fast=true&format=json');
		}
		
		$data = $response->getBody();

		return view('route.routeInfoResponse')->with('data', json_decode($data, true) );
	}	

	public function getAllStations(){
		$client = new Client(['base_uri' => 'http://data.irail.be/NMBS/']);
		$response = $client->get('Stations.json');
		$data = $response->getBody();

		return view('route.routeInfo')->with('data', json_decode($data, true) );
	}	
}