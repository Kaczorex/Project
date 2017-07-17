

<h3>
{{Form::open(['route'=>'transport.byDate'])}}
{{Form::date('delivry_date',\Carbon\Carbon::now(),[
	'id' => 'datepicker2',
	'style' => 'border-style:none;cursor:poitner;cursor:pointer;',
	'onchange' => 'this.form.submit()'])}}

	{{Form::close()}}

	</h3>