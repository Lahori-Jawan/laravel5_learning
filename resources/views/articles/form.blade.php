@extends ('mainPage')

@section ('section1')

<h2>This might be a login form!!</h2>

{!! Form::open(array('url'=>URL::to('about'))) !!}
	{!!Form::label('first-name', 'Name') !!}
	{!!Form::text('first-name',null, array(
		'id'=>'no-id',
		'placeholder'=>'placeholder'
	))!!}

{!! Form::close() !!}