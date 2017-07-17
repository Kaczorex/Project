
<button type="button" class="btn btn-success modal-button" data-toggle="modal" data-target="#pzModal">Dodaj wyjazd</button>

<div id="pzModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
      <h4 class="modal-title" id="myModalLabel">Uwaga</h4>
    </div>
    <div class="modal-body">
      {{Form::open(['route'=>'pz.create','id'=>'FormPz'])}}
      <div class="col-md-12">
        <div class="col-sm-4 ">
          {{Form::label('start_date','Producent:',['class'=>''])}}
        </div>
        <div class="col-sm-8">    
          {{Form::text('producer',null,['class'=>'form-control','required'])}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-sm-4 ">
          {{Form::label('invoice','Nr.Faktury:',['class'=>''])}}
        </div>
        <div class="col-sm-8">    
          {{Form::text('invoice',null,['class'=>'form-control','required'])}}
        </div>
      </div>
      <div class="col-md-12">
        <div class="col-sm-4 ">
          {{Form::label('start_date','Data uruchomienia:',['class'=>''])}}
        </div>
        <div class="col-sm-8">    
          {{Form::date('start_date',\Carbon\Carbon::now(),[
            'class'=>'form-control', 'id'=> 'datepicker'])}}
          </div>
        </div>

             <span><br>Danego wpisu nie będzie można usunąć.</span>
      </div>

     
      

      <div class="modal-footer">
        <button type="button" onclick="location.href=``" class="btn btn-default" data-dismiss="modal">Close</button>
  {{Form::submit('Dodaj do listy',['class'=>'btn btn-primary'])}}
  {{Form::close()}}




      </div>
    </div>
  </div>
</div>