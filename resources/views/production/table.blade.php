

<table class="table table-hover border-left-right product-table">
	<thead class="bold">
		<tr class="success">
			<th>Kontrahent</th>
			<th>Postęp</th>
			<th style="padding-left:60px;">Data rozpoczęcia produkcji</th>
		</tr>
	</thead>
	<tbody>
		<div class="table-product">

			@foreach($products as $product)
			<tr class="post{{$product->id}}" onclick="$(`#hidden{{$product->id}}`).toggle();">
				<td class="first-td">{{$product->topic}}</td>
				<td><div class="row">
					<div class="col-md-10"><div class="progress">
					<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="{{$product->progress}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$product->progress}}%;">
					{{$product->progress}}% Complete
					</div>
				</div></div>
					<div class="col-md-1">
	
					@if($product->progress<100)
					<a href="{{route('production.plus',$product->id)}}"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-plus"></span></button></a>
				@endif
				</div>
				<div class="col-md-1">	@if($product->progress>0)
					<a href="{{route('production.minus',$product->id)}}"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-minus"></span></button></a>
				@endif </div>
				</div>					
				</td>
				<td style="padding-left:60px;"> {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$product->created_at)->formatLocalized('%d %B %Y')}}</td>
			</tr>
			<tr class="tr-hidden" id="hidden{{$product->id}}" style="">
				<td colspan="3">
					<div class="row div-hidden" style="">
						<div class="col-md-4">
							@if(strpos($product->comments,'|')!=false)	
							<?php $comments = explode('|',$product->comments);
							$x=0;
							while(isset($comments[$x])){
								if(strpos($comments[$x],';')!=false){
									echo'</br>'.explode(';',$comments[$x])[0].' : '.explode(';',$comments[$x])[1];
								}else{
									echo $comments[$x];
								}
								$x++;
							};?>
							@else 

							{{$product->comments}}

							@endif

						</div>
						<div class="col-md-3"></div>
						<div class="col-md-4">  
							@foreach($files as $file)
							<script>
								$(document).ready(function() {
									$(".post{{$product->id}}").click(function() {
										$(".post{{$product->id}}").toggleClass("active");
									});
								});
							</script>
							<style>
								.post{{$product->id}}.active{
									background: #96FF82;
								}
								.table > tbody > tr.active > td, .table > tbody > tr.active > th, .table > tbody > tr > td.active, .table > tbody > tr > th.active, .table > tfoot > tr.active > td, .table > tfoot > tr.active > th, .table > tfoot > tr > td.active, .table > tfoot > tr > th.active, .table > thead > tr.active > td, .table > thead > tr.active > th, .table > thead > tr > td.active, .table > thead > tr > th.active {
									background: #96FF82;
								}
							</style>


							<?php  

							$ext=explode('/',$file);

							if($ext[1]==$product->id)
							{

								echo ' <a href="'.url('Produkcja/file/'.$product->id.'/'.$ext[2].'').'"><span class="glyphicon glyphicon-picture"></span> '.explode('.',$ext[2])[0].' </a><br/>';	
							}

							?>

							@endforeach
						</div>
						<div class="col-md-1">
							@include('production.edit')
						</div>
					</td>
				</tr>
				@endforeach
			</div>
		</tbody>
	</table>