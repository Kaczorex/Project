
@extends('layouts.layout') @section('title','Strona główna') @section('content')

@include('errors.FormValidate')



<br><br><br>
        {{Form::model($id,['route'=>['transport.update',$id->id],'method'=>'PUT'])}}
        <div class="col-md-12">
          <div class="col-sm-2 "> 
           {{Form::label('address','Adres:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::text('address',$id->address,['class'=>'form-control'])}}
        </div>
      </div>
         <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('car','Samochód:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::select('car',['Mercedes' => 'Mercedes' , 'HDS' => 'HDS' , 'Ford' => 'Ford' ] , $id->car , ['class'=>'form-control'])}}
        </div>
      </div>
       <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('priority','Priorytet:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::select('priority', ['0' => 'Normalny', '1' => 'Priorytet'], $id->priority ,['class'=>'form-control'])}}
        </div>
      </div> <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('time_of_day','Godzina:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::select('time_of_day', ['0' => 'Cały dzień', '1' => 'Rano','2' => 'Po południu'], $id->time_fo_day ,['class'=>'form-control'])}}
        </div>
      </div> <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('DD','Dokument dostawy:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::text('DD',$id->dd,['class'=>'form-control'])}}
        </div>
      </div> <div class="col-md-12">
          <div class="col-sm-2">
           {{Form::label('comments','Uwagi:',['class'=>'form_control'])}}
         </div>
         <div class="col-sm-10">    
          {{Form::text('comments',$id->comments,['class'=>'form-control'])}}
          {{Form::hidden('delivry_date',$id->delivry_date_glob)}}
        </div>
      </div>
       {{Form::submit('Save',['class' => 'btn btn-primary'])}}
         {{Form::close()}}
          {{link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) }}


   @endsection
