@extends('layouts.layout') @section('title','PZ') @section('content')

<div class="row">
	<div class="col-md-12">	@include('errors.FormValidate')</div>
</div>


<div class="row">
	<div class="col-md-4 buttonAddPosts">

	@include('pz.open')
	</div>
	<div class="col-md-8"></div>
<div class="row">

	@include('pz.table')

</div>


@endsection