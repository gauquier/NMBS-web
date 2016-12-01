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
                        <th>Richting</th>
                        <th>Spoor</th>
                      </tr>
                    </thead>
                    @foreach($data['departures']['departure'] as $station)
                        <tbody>
                          <tr>
                            <td>{{ $station['time'] }}</td>
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