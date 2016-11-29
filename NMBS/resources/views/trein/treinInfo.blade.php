@extends('layout.layout')

@section('content')
    <div class="jumbotron">
        <div>
            <h2>
                Trein info
            </h2>
            <form method="post" action="/trein" enctype="multipart/form-data">
                <div>
                    <div class="form-group row">
                        <label class="col-xs-1 col-form-label">Trein nummer: </label>
                        <div class="col-xs-5">
                        	<input type="text">
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <div class="form-group row">
                            <label class="col-xs-1 col-form-label">Datum:</label>
                            <div class="col-xs-5">
                                <input type="text" value="31/10/2016" id="" title="(dd/mm/jjjj)" >
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
