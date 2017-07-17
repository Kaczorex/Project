@extends('layouts.layout') @section('title','Produkcja') @section('content')

  <link href="{{ asset('css/production/layouts.css') }}" rel="stylesheet">

<div class="row">
	<div class="col-md-4 buttonAddPosts">
		@include('production.open')
	</div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
	<div class="col-md-4"></div>
</div>
<div class="row">
	<div class="col-md-12">
		
	@include('production.table')

	</div>

</div>



@endsection