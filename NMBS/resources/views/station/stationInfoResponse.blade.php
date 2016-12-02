@extends('layout.layout')

@section('content')
    
	<div class="jumbotron">
        <div>
            <h2>
                Station info
            </h2>
               
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
                    @foreach($data['departures']['departure'] as $station)
                        <tbody>
                          <tr>
                            <td>{{ $station['time'] }}</td>
                            @if ( $station['delay'] > 0)
                                <td style="color: red">+ {{ $station['delay'] / 60}} min</td>
                            @else
                                <td style="color: green">+ {{ $station['delay'] }} min</td>
                            @endif
                            <td>{{ $station['station'] }}</td>
                            <td>{{ $station['vehicle'] }}</td>
                            <td>{{ $station['platform'] }}</td>
                          </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
	
	
@endsection