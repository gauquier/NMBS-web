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
                            <select class="form-control" id="Station" name="Station">
                                @foreach($data['Stations'] as $station)
                                    <option value="{{ $station['name'] }}">{{ $station['name'] }}</option>
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
                                <input type="text" value="{{ $ldate = date('d-m-Y') }}" id="date" title="(dd/mm/jjjj)" >
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
                                <input class="form-check-input" type="radio" id="inlineCheckbox1" value="Vertrek" name="select" checked="true"> Vertrek
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