@extends('layout.layout')

@section('content')
	<div class="jumbotron">
        <div>
            <h2>
                Reisplanner
            </h2>
             <form method="get" action="/routeInfoGegevens" enctype="multipart/form-data">
                <div>
                    <div class="form-group row">
                        <label class="col-xs-1 col-form-label">Van: </label>
                        <div class="col-xs-5">
                        	<select class="form-control" id="van" name="van">
                                @foreach($data['Stations'] as $station)
                                    <option value="{{ $station['id'] }}">{{ $station['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-xs-1 col-form-label">Naar: </label>
                        <div class="col-xs-5">
                        	<select class="form-control" id="naar" name="naar">
                                @foreach($data['Stations'] as $station)
                                    <option value="{{ $station['id'] }}">{{ $station['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                    	<div class="form-group row">
    	                    <label class="col-xs-1 col-form-label">Datum:</label>
    	                    <div class="col-xs-5">
    	                    	 <input type="text" value="{{ $ldate = date('d-m-Y') }}" id="date" name="date" title="(dd/mm/jjjj)" >
    	                    </div>
    	                </div>
                    	<div class="form-group row">
    	                    <label class="col-xs-1 col-form-label">Tijd: </label>
    	                    <div class="col-xs-5">
    	                    	<input type="text" id="time" value="{{ $ldate = date('H:i') }}" >
    	                    </div>
    	                </div>
    		             <div class="form-group row">
    	                	<label class="form-check-inline">
    						  	<input class="form-check-input" type="radio" id="inlineCheckbox1" value="Vertek" name="select" checked="true"> Vertrek
    						</label>
    						<label class="form-check-inline">
    							<input class="form-check-input" type="radio" id="inlineCheckbox2" value="Aankomst" name="select"> Aankomst
    						</label>
    	                </div>
    		                
                    </div>
                </div>
                <div>
                     <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
@endsection