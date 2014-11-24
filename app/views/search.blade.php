@extends('layout')

@section('content')
	{{ Form::open() }}
		{{ Form::select("category_input", array('all' => 'Category', 'auction' => 'Auction', 'direct' => 'Direct'))}}
		{{ Form::label("keyword", "Keyword") }}
		{{ Form::text("keyword_input") }}
		{{ Form::submit("search") }}
	{{ Form::close() }}
@stop