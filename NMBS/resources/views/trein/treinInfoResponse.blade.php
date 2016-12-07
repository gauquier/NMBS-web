@extends('layout.layout')

@section('content')
	<div class="jumbotron">
        <div>
            <h2>
                Trein info
            </h2>
               
            <div class="form-group row">
                <table class="table">
                    <thead>
                      <tr>
                        <th>Aankomst uur</th>
                        <th>Vertrek uur</th>
                        <th>Vertraging</th>
                        <th>Station</th>
                        <th>Spoor</th>
                      </tr>
                    </thead>
                    @foreach($data['stops']['stop'] as $station)
                        <tbody>
                          <tr>
                            <td>{{ date('H:i',$station['scheduledArrivalTime']) }}</td>
                            <td>{{ date('H:i',$station['scheduledDepartureTime']) }}</td>
                            @if ( $station['delay'] > 0)
                                <td style="color: red">+ {{ $station['delay'] }} min</td>
                            @else
                                <td style="color: green">+ {{ $station['delay'] }} min</td>
                            @endif
                            <td>{{ $station['station'] }}</td>
                            <td>{{ $station['platform'] }}</td>
                          </tr>
                        </tbody>
                    @endforeach
                    
                  </table>
            </div>
        </div>
    </div>
	
	
@endsection