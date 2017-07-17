

<table class="table table-hover border-left-right">
	<thead class=" bold">
		<tr class="success">
			<th>#</th>
			<th>Kontrahent</th>
			<th>Nr.Faktury</th>
			<th>Data przekazania</th>
			<th>Kto</th>
		</tr>
	</thead>
	<tbody>
		<?php $x=0; ?>
		@foreach($pz as $post)
		<tr>
			<td><?php $x++;?> </td>
			<td>{{$post->producer }}</td>
			<td>{{$post->invoice}} </td>
			<td>{{$post->start_date}} </td>
			<td>{{Auth::user()->whoById($post->user_id)}}</td>
		</tr>
		@endforeach	
	</tbody>
</table>