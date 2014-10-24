@extends("master")

@section("title")
	Random User Generator
@stop

@section("content")
	<h3>Random User Generator</h3>
	{{ Form::open(array('url' => '/users', 'method' => 'POST')); }}	
	
		{{ Form::label('ucount', 'Number of Users'); }}
		{{ Form::text('ucount'); }} 
		{{ Form::submit('Generate'); }}
	
	{{ Form::close() }}
	
	<br>
	
	@if(isset($name))
		<p><strong>Name:</strong> {{ $name }}<br>
		<strong>Address:</strong> {{ $address }}<br>
		<strong>Profile:</strong> {{ $profile }}</p>
	@endif
@stop