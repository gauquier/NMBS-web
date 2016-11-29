@extends('layout.layout')

@section('content')

	<div class="jumbotron">
        <div>
            <h2>
                Station info
            </h2>
               
            <div class="form-group row">
                @foreach($data as $gegevens)
			            <p>{{ $gegevens}} </p>
			    @endforeach
            </div>
        </div>
    </div>
	
	
@endsection