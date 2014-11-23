@extends('layout')

@section('content')
	@if ($result->count() == 0)
		<h1> No product found. </h1>
	@else
		<h1> Search Result </h1>
		@foreach ($result as $r)
			ID: {{$r->idProduct}}  Name: {{$r->product_name}}<br>
		@endforeach
	@endif
@stop
