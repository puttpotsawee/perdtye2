@extends('layout')

@section('content')
  {{$product}}
  {{$details}}
  {{$seller}}

  {{ Form::open(array('method' => 'put')) }}
    
    {{ Form::label("timeLeft", "End time") }}
    {{$details->end_time}}
    <br>
    {{ Form::label("currentBid", "Current bid") }}
    {{$details->current_price}}
    <br>
    {{ Form::submit("Place more bid")}}
    <br>
    {{ Form::text("maxbid_input") }}
    specify your maximum bid
    <br>
    {{ Form::submit("Place bid") }}

  {{ Form::close() }}

@stop