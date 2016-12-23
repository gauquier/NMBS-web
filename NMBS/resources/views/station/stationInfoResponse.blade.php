@extends('layout.layout')

@section('content')
    
	<div class="jumbotron">
        <div>
            <h2>
                Station info
            </h2>
             @if ($errors->count())
                <p id="alert" class="help-block"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>Er werden geen gevens gevonden voor uw zoekopdracht probeer opnieuw! </p>
                <a href="/stationInfo" class="btn btn-primary" role="button">Nieuwe zoekopdracht</a>
            @else
                <div class="form-group row">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Tijd</th>
                        <th>Vertraging</th>
                        <th>Richting</th>
                        <th>Trein</th>
                        <th>Spoor</th>
                      </tr>
                    </thead>
                    @if ($dep === 'Vertrek')
                        @foreach($data['departures']['departure'] as $station)
                            <tbody>
                              <tr>
                                <td>{{ date('H:i',$station['time']) }}</td>
                                @if ( $station['canceled'] == 1)
                                     <td style="color: red"> Geanulleerd</td>
                                @else
                                     @if ( $station['delay'] > 0)
                                        <td style="color: red">+ {{ $station['delay'] / 60}} min</td>
                                    @else
                                        <td style="color: green">+ {{ $station['delay'] }} min</td>
                                    @endif
                                @endif
                                <td>{{ $station['station'] }}</td>
                                <td>{{ substr($station['vehicle'], 8) }}</td>
                                <td>{{ $station['platform'] }}</td>
                              </tr>
                            </tbody>
                        @endforeach
                    @else
                        @foreach($data['arrivals']['arrival'] as $station)
                            <tbody>
                              <tr>
                                <td>{{ date('H:i',$station['time']) }}</td>
                                @if ( $station['delay'] > 0)
                                    <td style="color: red">+ {{ $station['delay'] / 60}} min</td>
                                @else
                                    <td style="color: green">+ {{ $station['delay'] }} min</td>
                                @endif
                                <td>{{ $station['station'] }}</td>
                                <td>{{ substr($station['vehicle'], 8) }}</td>
                                <td>{{ $station['platform'] }}</td>
                              </tr>
                            </tbody>

                        @endforeach
                    @endif
                </table>
            </div>
            @endif
        </div>
    </div>
	
	
@endsection