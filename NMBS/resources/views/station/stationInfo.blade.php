@extends('layout.layout')

@section('content')
    <div class="jumbotron">
        <div>
            <h2>
                Zoek realtime informatie
            </h2>
            <div>
                <div id="stationInput">
                    <label >Station</label>
                    <input type="text">
                </div>
            </div>
            <div class="booking-date">
                <div class="booking-input">
                    <div class="dateBox">
                            <label for="dateRealTimeInput">Datum (dd/mm/jjjj)</label>
                            <input type="text" value="31/10/2016" id="dateRealTimeInput" title="(dd/mm/jjjj)" >
                    </div>
                    <div>
                        <div class="hoursInput">
                                <label>Tijd</label>
                                <input type="text" value="16:30" >
                        </div>
                        <div>
                            <input type="radio"  checked="checked" class="js-departure-radio-realtime"><label>Vertrek</label>
                            <input type="radio"><label>Aankomst</label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-primary">Zoek info</button>
            </div>
        </div>
    </div>
@endsection