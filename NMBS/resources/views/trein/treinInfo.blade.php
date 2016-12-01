@extends('layout.layout')

@section('content')
    <div class="jumbotron">
        <div>
            <h2>
                Trein info
            </h2>
            <form method="get" action="/trein" enctype="multipart/form-data">
                <div>
                    <div class="form-group row">
                        @if ($errors->has('nummer'))<p id="alert" class="help-block"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                {{ $errors->first('nummer') }}</p>
                        @endif
                        <label class="col-xs-1 col-form-label" id="nummer">Trein nummer: </label>
                        <div class="col-xs-5">
                            @if ($errors->has('nummer'))
                                 <input type="text" class="form-control" id="alertInput" name="nummer" value="{{ old('nummer') }}">
                            @else
                                 <input type="text" class="form-control" id="nummer" name="nummer" value="{{ old('nummer') }}">
                            @endif
                        	
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="form-group row">
                            <label class="col-xs-1 col-form-label">Datum:</label>
                            <div class="col-xs-5">
                                <input type="text" id="date" value="{{ $ldate = date('d-m-Y') }}" title="(dd/mm/jjjj)" >
                            </div>
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
