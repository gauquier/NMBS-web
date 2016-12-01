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
                        <th>Tijd</th>
                        <th>Station</th>
                        <th>Spoor</th>
                      </tr>
                    </thead>
                    @foreach($data['stops']['stop'] as $station)
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