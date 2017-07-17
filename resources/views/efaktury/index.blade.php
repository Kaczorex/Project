@extends('layouts.layout') @section('tittle','Efaktury') @section('content')

<div class="row">
	<div class="col-md-12">@include('errors.FormValidate')</div>
</div>

<div class="row ">
	<div class="col-md-2 buttonAddPosts">@include('efaktury.open')</div>

<div class="col-md-10"></div>
</div>
<div class="row">
	<div class="col-md-12">@include('efaktury.table')</div>
</div>


@endsection