

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
		
			<tr

			@if (($transport->driver=='0')
			&&  (
				(Auth::user()->hasAnyRole('Administrator')) 
			|| (Auth::user()->hasAnyRole('Dyrektor logistyki')) 
			|| (Auth::user()->hasAnyRole('Logistyka'))))
			 style="cursor:pointer; background: red;" data-toggle="modal" data-target="#askMe-{{$transport->id}}"

			
			@elseif (($transport->driver=='0') && ($transport->user_id == Auth::user()->id)) style="cursor: pointer;background: blue;"
			onclick="window.location.href = '/Transport/edit/{{$transport->id}}';"
			
			@elseif (($transport->driver!='0')
			&&  (
				(Auth::user()->hasAnyRole('Administrator')) 
			|| (Auth::user()->hasAnyRole('Dyrektor logistyki')) 
			|| (Auth::user()->hasAnyRole('Logistyka'))))
			style="cursor:pointer; background:pink; " data-toggle="modal" data-target="#askMe-{{$transport->id}}"
		
			@endif 
			>
			
			<td><?= $i++;  ?>({{$transport->id}})</td>
			<td>{{$transport->magazine}}</td>
			<td>{{Auth::user()->id($transport->user_id)->name}}</td>
			<td>{{$transport->address}}</td>
			<td>{{$transport->car}}</td>
			<td>{{\App\Transport::priority($transport->priority)}}</td>
			<td>{{\App\Transport::timeOfDay($transport->time_of_day)}}</td>
			<td>{{$transport->DD}}</td>
			<td>{{$transport->comments}}</td>
			<td>{{Auth::user()->whoById($transport->driver)}}</td>
</tr>
	@include('modal.askMe')
			@endforeach
		
	</tbody>
</table>