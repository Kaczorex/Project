<table class="table table-hover border-left-right product-table">
	<thead class="bold">
		<tr class="success">
			<th>Kontrahent</th>
			<th>Postęp</th>
			<th>Pliki</th>
		</tr>
	</thead>
	<tbody>
<div class="table-product">

@foreach($products as $product)
		<tr onclick="$(`#hidden{{$product->id}}`).toggle();">
			<td class="first-td">{{$product->topic}}</td>
			<td>{{$product->progress}}</td>
			<td>{{$product->comments}}</td>
		</tr>
		<tr class="tr-hidden" id="hidden{{$product->id}}" style="">
		<td colspan="3">
	<div class="row div-hidden" style="">
		<div class="col-md-4">1</div>
		<div class="col-md-4">2</div>
		<div class="col-md-4">  
	<img src="{{$img}}" alt="">
		</div>

	</div>
	
		</td>
		</tr>
@endforeach
</div>
	</tbody>
</table>