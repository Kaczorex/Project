<!-- Large modal -->
<button type="button" class="btn btn-success modal-button" data-toggle="modal" data-target="#myModal">Dodaj wyjazd</button>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Dodaj wyjazd na dzień: {{$date}}</h4>
      </div>
      <div class="modal-body">

        {{Form::open(['route'=>'transport.create','id'=>'FormTransport'])}}
        <div class="col-md-12">
          <div class="col-sm-2 ">
           {{Form::label('address','Adres:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::text('address',null,['class'=>'form-control','required'])}}
        </div>
      </div>
         <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('car','Samochód:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::select('car',['Mercedes' => 'Mercedes' , 'HDS' => 'HDS' , 'Ford' => 'Ford' ],'Wybierz pojazd',['class'=>'form-control'])}}
        </div>
      </div>
       <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('priority','Priorytet:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::select('priority', ['0' => 'Normalny', '1' => 'Priorytet'], '0',['class'=>'form-control'])}}
        </div>
      </div> <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('time_of_day','Godzina:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::select('time_of_day', ['0' => 'Cały dzień', '1' => 'Rano','2' => 'Po południu'], 'S',['class'=>'form-control'])}}
        </div>
      </div> <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('DD','Dokument dostawy:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::text('DD',null,['class'=>'form-control','required'])}}
        </div>
      </div> <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('comments','Uwagi:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::text('comments',null,['class'=>'form-control'])}}
        </div>
      </div>
   {{Form::hidden('delivry_date', $date )}}
<br><br><span>  Każdy wyjazd zostanie zweryfikowany przez Dyrektora </span><br>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      {{Form::submit('Save',['class' => 'btn btn-primary'])}}
         {{Form::close()}}
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->