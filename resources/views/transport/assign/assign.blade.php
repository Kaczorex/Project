@extends('layouts.layout') @section('title','Strona główna') @section('content')

@include('errors.FormValidate')
<div class="row">

<table class="table table-hover border-left-right">
	<thead class=" bold">
		<tr class="success">
			<th>#</th>
			<th>Magazyn</th>
			<th>Handlowiec</th>
			<th>Adres</th>
			<th>Samochod</th>
			<th>Priorytet</th>
			<th>Godz.</th>
			<th>Dok.Transportu</th>
			<th>Uwagi</th>
			<th>Kierowca</th>
		</tr>
	</thead>
	<tbody>
		<?php $i=1; ?>
		@foreach($transports as $transport)
		<tr>
			<td><?= $i++;  ?>({{$transport->id}})</td>
			<td>{{$transport->magazine}}</td>
			<td>{{Auth::user()->id($transport->user_id)->name}}</td>
			<td>{{$transport->address}}</td>
			<td>{{$transport->car}}</td>
			<td>{{\App\Transport::priority($transport->priority)}}</td>
			<td>{{\App\Transport::timeOfDay($transport->time_of_day)}}</td>
			<td>{{$transport->DD}}</td>
			<td>{{$transport->comments}}</td>
			<td>@include('transport.assign.form')</td>
		</tr>
		@endforeach
		</tbody></table>
		</div>
		<div class="row"> 
		         {{link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) }}
		         </div>
@endsection