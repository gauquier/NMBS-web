@extends('layout.layout')

@section('content')
    <div class="jumbotron">
        <div>
            <h2>
                Station info
            </h2>
            <form method="get" action="/station" enctype="multipart/form-data">
                <div>
                    <div class="form-group row">
                        <label class="col-xs-1 col-form-label">Station: </label>
                        <div class="col-xs-5">
                            <select class="form-control" id="Station">
                                <option>station naam</option>
                            </select>

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
                    <input type="submit">
                </div>
            </form> 
        </div>
    </div>
@endsection