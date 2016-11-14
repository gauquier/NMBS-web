@extends('layout.layout')

@section('content')
	<div class="jumbotron">
        <div>
            <h2>
                Reisplanner
            </h2>
            <div>
                <div class="form-group row">
                    <label class="col-xs-1 col-form-label">Van: </label>
                    <div class="col-xs-5">
                    	<input type="text">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xs-1 col-form-label">Naar: </label>
                    <div class="col-xs-5">
                    	<input type="text">
                    </div>
                </div>
            </div>
            <div>
                <div>
                	<div class="form-group row">
	                    <label class="col-xs-1 col-form-label">Datum:</label>
	                    <div class="col-xs-5">
	                    	<input type="text" value="31/10/2016" id="" title="(dd/mm/jjjj)" >
	                    </div>
	                </div>
	                <div class="form-group row">
	                	<label class="form-check-inline">
						  	<input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="reis"> Heenreis
						</label>
						<label class="form-check-inline">
							<input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="reis"> Heen- en Terugreis
						</label>
	                </div>
                	<div class="form-group row">
	                    <label class="col-xs-1 col-form-label">Tijd: </label>
	                    <div class="col-xs-5">
	                    	<input type="text" value="16:30" >
	                    </div>
	                </div>
		             <div class="form-group row">
	                	<label class="form-check-inline">
						  	<input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1" name="select"> Vertrek
						</label>
						<label class="form-check-inline">
							<input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2" name="select"> Aankomst
						</label>
	                </div>
		                
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-primary">Zoek info</button>
            </div>
        </div>
    </div>
@endsection