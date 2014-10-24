@extends("master")

@section("title")
	Lorem Ipsum Generator
@stop

@section("content")
	<h3>Lorem Ipsum Generator</h3>
	<p>Please input the number of paragraphs you would like to create. Unless you plan on
	writing a book of lorem ipsum, the maximum number is 25.</p>
	{{ Form::open(array('url' => '/lipsum', 'method' => 'POST')); }}	
	
		{{ Form::label('pcount', 'Number of Paragraphs'); }}
		{{ Form::text('pcount'); }} 
		{{ Form::submit('Generate'); }}
	
	{{ Form::close() }}
	
	<br>
	
	@if(isset($lorem))
		<p>{{ $lorem }}</p>
	
	@endif
@stop