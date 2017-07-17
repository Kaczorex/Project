{{Form::model($transport,['route'=>['transport.assignUpdate',$transport->id],'method'=>'PUT','id'=>$transport->id])}}

{{Form::select('driver',Auth::user()->ifRole('kierowca'), $transport->driver ,['class'=>'form-control','onchange'=>"document.getElementById(`$transport->id`).submit();"])}}
{{Form::hidden('delivry_date',$transport->delivry_date)}}

{{Form::close()}}
