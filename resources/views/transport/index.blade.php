@extends('layouts.layout') @section('title','Transport') @section('content')

<div class="row">
	<div class="col-md-12">@include('errors.FormValidate')</div>
</div>


<div class="row">
	<div class="col-md-5 buttonAddPosts">
		@include('transport.formToAddPosts')
	</div>
	<div class="col-md-5">





<h3>Wyjazdy na <?= $dt; ?></h3>
	</div>
	<div class="col-md-2">
		@include('transport.changeDate') 
	</div>

</div>

<div class="row">
	<h3 class="bg-danger">@include('transport.info')</h3>
</div>
<div class="row">


	@include('transport.tableShowPosts')

</div>



@endsection