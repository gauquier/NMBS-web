@extends('layout.layout')

@section('content')
    
	<div class="jumbotron">
        <div>
            <h2>
                Route info
            </h2>
             @if ($errors->count())
                <p id="alert" class="help-block"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>Er werden geen gevens gevonden voor uw zoekopdracht probeer opnieuw! </p>
                <a href="/routeInfo" class="btn btn-primary" role="button">Nieuwe zoekopdracht</a>
            @else
            <div class="form-group row">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Route</th>
                        <th>Tijd</th>
                        <th>Reistijd</th>
                        <th>Richting</th>
                        <th>Spoor</th>
                      </tr>
                    </thead>
                        @foreach($data['connection'] as $station)
                            <tbody>
                                <tr>
                                    <td> Van: {{ $station['departure']['station'] }} <br> Naar: {{ $station['arrival']['station'] }}</td>
                                    <td>{{ date('H:i',$station['departure']['time']) }} vertrek  
                                    @if ( $station['departure']['canceled'] == 1)
                                         <a style="color: red"> Geanulleerd</a>
                                    @else
                                         @if ( $station['departure']['delay'] > 0)
                                            <a style="color: red">+ {{ $station['departure']['delay'] / 60}} min</a>
                                        @else
                                            <a style="color: green">+ {{ $station['departure']['delay'] }} min</a>
                                        @endif
                                    @endif
                                    <br> {{ date('H:i',$station['arrival']['time']) }} aankomst
                                    @if ( $station['arrival']['canceled'] == 1)
                                         <a style="color: red"> Geanulleerd</a>
                                    @else
                                         @if ( $station['arrival']['delay'] > 0)
                                            <a style="color: red">+ {{ $station['arrival']['delay'] / 60}} min</a>
                                        @else
                                            <a style="color: green">+ {{ $station['arrival']['delay'] }} min</a>
                                        @endif
                                    @endif
                                    </td>
                                    <td>{{ date('H:i',$station['duration']) }} </td>
                                    <td>
                                    @if ( $station['departure']['direction']['name']  ==   $station['arrival']['direction']['name'] )
                                        {{ $station['departure']['direction']['name'] }}
                                    @else
                                      1ste trein:  {{ $station['departure']['direction']['name'] }}
                                         <br> 
                                       2de trein: {{ $station['arrival']['direction']['name'] }}
                                    @endif
                                    </td>
                                    <td>Vertrek: {{ $station['departure']['platform'] }} <br> Aankomst: {{ $station['arrival']['platform'] }} </td>
                                </tr>
                            </tbody>
                        @endforeach
                </table>
            </div>
            @endif
        </div>
    </div>
	
	
@endsection