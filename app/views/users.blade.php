@extends("master")

@section("title")
	Random User Generator
@stop

@section("content")
	<h3>Random User Generator</h3>
	<p>Please input the number of users you would like to create. In the interest of time,
	the max you can select is 25.</p>
	{{ Form::open(array('url' => '/users', 'method' => 'POST')); }}	
	
		{{ Form::label('ucount', 'Number of Users'); }}
		{{ Form::text('ucount'); }} 
		{{ Form::submit('Generate'); }}
	
	{{ Form::close() }}
	
	<br>
		
	@if(isset($users))
		@foreach ($users as $entry => $user)
			<p><strong>Name:</strong> {{ $user['name'] }}<br>
			<strong>Address:</strong> {{ $user['address'] }}<br>
			<strong>Profile:</strong> {{ $user['profile'] }}</p>
		@endforeach
	@elseif(isset($error))
		{{ $error }}
	@endif
@stop