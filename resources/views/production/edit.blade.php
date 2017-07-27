<span class="glyphicon glyphicon-edit glyphicon-edit-action" data-toggle="modal" data-target="#action{{$product->id}}"></span>




{{-- //administrator 

	--}}
	<div id="action{{$product->id}}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Produkcja</h4>
				</div>
				<div class="modal-body">
					{{Form::open(['route'=>['production.addFile',$product->id],'id'=>$product->id,'files'=>'true'])}}
					<div class="row">
						<div class="col-md-12">
							<div class="col-sm-3 ">
								<span><b> Uwagi: </b></span>
							</div>
							<div class="col-sm-9">    
								<textarea name="comments" class="form-control"></textarea> 
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6"></div>
						<div class="col-md-6"><br></div>
					</div>
					<div class="row">
						<div class="col-md-7"></div>
						<div class="col-md-5">
						<input type="hidden" name="id" value="{{$product->id}}">
							<input type="file" name="file" class="btn btn-info" onchange='document.getElementById("{{$product->id}}").submit();'>

						</div>
					</div>
				</div>
				<div class="modal-footer">
					{{Form::submit('Dodaj do produkcji',['class'=>'btn btn-primary'])}}
					{{Form::close()}}
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

{{-- 
	<div id="action{{$product->id}}" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
					<h4 class="modal-title" id="myModalLabel">Produkcja</h4>
				</div>
				<div class="modal-body">
					<form action="query.php" name="{{$product->id}}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
						<input type="hidden" name="id" value="{{$product->id}}" >
						<input type="file" name="file" class="btn btn-info" onchange='document.getElementById("{{$product->id}}").submit();'>
					</div>
					<div class="modal-footer">
						<input type="submit" class="btn btn-primary">
					</form>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	--}}










	<br><br>


