{{Form::open(['route'=>'prefabrykacja.create'])}}
    <div class="col-md-2">
    {{Form::label('Nazwa firmy:','Nazwa firmy:',['class'=>'form_control'])}}
    {{Form::text('company',null,['class'=>'form-control'])}}
    </div>
    <div class="col-md-2">
    {{Form::label('Nazwa produktu:','Nazwa produktu:',['class'=>'form_control'])}}
    {{Form::text('product',null,['class'=>'form-control'])}}
    </div>
    <div class="col-md-1">
    {{Form::label('Ilość:','Ilość:',['class'=>'form_control'])}}
    {{Form::number('many',null,['class'=>'form-control'])}}
    </div>
    <div class="col-md-2">
    {{Form::label('Data oddania:','Data oddania:',['class'=>'form_control'])}}
    {{Form::date('reciveData',\Carbon\Carbon::now(),['class'=>'form-control', 'id'=> 'datepicker'])}}</div>
    <div class="col-md-2">
    {{Form::label('Uwagi:','Uwagi:',['class'=>'form_control'])}}
    {{Form::text('notes',null,['style'=>'resize:vertical','class'=>'form-control', 'cols'=> '10'])}}</div>
    <div class="col-md-1"><br>
    {{FORM::submit('Dodaj',['class'=>'btn btn-success'])}}
    {{Form::close()}}
      </div>
    <div class="col-md-2">
        <h3>
            {{ Form::open(['route'=>'prefabrykacja.store']) }} 
            {{ Form::date('reciveData2',\Carbon\Carbon::now(),[
            'id' => 'datepicker2',
            'style' => 'border-style:none;cursor:poitner;cursor:pointer;',
            'onchange' => 'this.form.submit()'])}}
            {{ Form::close() }}
      
        </h3>
    </div>