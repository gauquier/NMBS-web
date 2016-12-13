@extends('layout.layout')

@section('content')
    
	<div class="jumbotron">
        <div>
            <h2>
                Route info
            </h2>
               
            <div class="form-group row">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Route</th>
                        <th>Tijd</th>
                        <th>Reistijd</th>
                        <th>Overstappen</th>
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
                                    <td></td>
                                    <td>Vertrek: {{ $station['departure']['platform'] }} <br> Aankomst: {{ $station['arrival']['platform'] }} </td>
                                </tr>
                            </tbody>
                        @endforeach
                    
                    
                </table>
            </div>
        </div>
    </div>
	
	
@endsection