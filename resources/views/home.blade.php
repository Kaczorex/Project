

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
    <a href="{{ url('/Transport') }}">Transport</a><br>
    <a href="{{ url('/Prefabrykacja') }}">Prefabrykacja</a><br>

    
   
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
