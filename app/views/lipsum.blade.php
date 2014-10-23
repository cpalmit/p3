@extends("master")

@section("title")
	Lorem Ipsum Generator
@stop

@section("content")
	
	<h3>Lorem Ipsum Generator</h3>
	{{ Form::open(array('url' => '/lipsum', 'method' => 'POST')); }}	
	
		{{ Form::label('pcount', 'Number of Paragraphs'); }}
		{{ Form::text('pcount'); }} 
		{{ Form::submit('Generate'); }}
	
	{{ Form::close() }}
	
	<p>{{ $lorem }}</p>
	
@stop