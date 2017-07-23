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
						<div class="col-md-3">2</div>
						<div class="col-md-5">  
							@foreach($files as $file)
							<?php  
							$ext=explode('/',$file);

							if($ext[1]==$product->id)
							{
								
								echo ' <a href="'.url('Produkcja/file/'.$product->id.'/'.$ext[2].'').'"><span class="glyphicon glyphicon-picture"></span> '.explode('.',$ext[2])[0].' </a><br/>';	
							}

							?>

							@endforeach
							{{Form::open(['route'=>['production.addFile',$product->id],'id'=>$product->id,'files'=>'true'])}}
							{{-- {{Form::file('file',null,['onchange'=>'document.getElementById("$product->id").submit()'])}} --}}
							<input type="file" name="file" class="btn btn-info" onchange='document.getElementById("{{$product->id}}").submit();'>
							{{Form::close()}}
						</div>
					</td>
				</tr>
				@endforeach
			</div>
		</tbody>
	</table>