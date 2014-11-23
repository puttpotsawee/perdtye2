@extends('layout')

@section('content')
	{{ Form::open() }}
		{{ Form::label("category", "Category") }}
		{{ Form::text("category_input") }}
		{{ Form::label("keyword", "Keyword") }}
		{{ Form::text("keyword_input") }}
		{{ Form::submit("search") }}
	{{ Form::close() }}
@stop