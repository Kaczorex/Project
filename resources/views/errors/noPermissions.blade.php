@extends('layouts.layout') @section('title','Error') @section('content')
<div class="content-layout-center">

	Wybacz nie posiadasz uprawnień do przeglądania tej strony
	&nbsp; 
	{{link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-danger']) }}</div>


	@endsection