


<button type="button" class="btn btn-success modal-button" data-toggle="modal" data-target="#pzModal">Dodaj do produkcji</button>

<div id="pzModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
				<h4 class="modal-title" id="myModalLabel">Uwaga</h4>
			</div>
			<div class="modal-body">

				{{Form::open(['route'=>'production.create','files'=>true])}}

				<div class="col-md-12">
					<div class="col-sm-4 ">
						{{Form::label('topic','Temat:')}}
					</div>
					<div class="col-sm-8">    
						{{Form::text('topic',null,['class'=>'form-control'])}}
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-sm-4 ">
						{{Form::label('progress','Postęp:')}}
					</div>
					<div class="col-sm-8">    
						{{Form::text('progress',null,['class'=>'form-control'])}}
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-sm-4 ">
						{{Form::label('comments','Uwagi:')}}
					</div>
					<div class="col-sm-8">    
						{{Form::textarea('comments',null,['class'=>'form-control'])}}
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-sm-4 ">
						{{Form::label('file','Pliki:')}}
					</div>
					<div class="col-sm-8">    
						{{Form::file('file',null,['class'=>'form-control'])}}
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-sm-4 ">
						{{Form::label('code','Kod:')}}
					</div>
					<div class="col-sm-8">    
						{{Form::text('code','tymczasowe',['class'=>'form-control'])}}
					</div>
				</div>


				<span> Nie zapomnij dodać plików</span>
			</div>




			<div class="modal-footer">
				<button type="button" onclick="location.href=``" class="btn btn-default" data-dismiss="modal">Close</button>
				{{Form::submit('Dodaj do produkcji',['class'=>'btn btn-primary'])}}
				{{Form::close()}}




			</div>
		</div>
	</div>
</div>