


<table class="table table-hover border-left-right">
	<thead class=" bold">
		<tr class="success">
			<th>#</th>
			<th>Producent</th>
			<th>Nip</th>
			<th>Data uruchomienia</th>
			<th>Adresat</th>
		</tr>
	</thead>
	<tbody>
<?php $x=1; ?>
	@foreach($efaktury as $efaktura)
		<tr>
			<td>{{$x++}}</td>
			<td>{{$efaktura->producer}}</td>
			<td>{{$efaktura->nip}}</td>
			<td>{{$efaktura->start_date}}</td>
			<td>{{$efaktura->address}}</td>
		</tr>
		@endforeach
	</tbody>
</table>