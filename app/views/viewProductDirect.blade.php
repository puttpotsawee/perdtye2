@extends('layout')

@section('content')
  {{$product}}
  {{$details}}
  {{$seller}}

    {{ Form::open() }}
      {{ Form::label("price", "Price") }}
      {{$details->price}}
      
      {{ Form::label("quantity", "Quantity") }}
      ({{$details->remaining}} in stock)
      {{ Form::text("quantity_input") }}
      
      {{ Form::submit("Buy now") }}
  {{ Form::close() }}

@stop