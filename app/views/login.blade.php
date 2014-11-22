@extends('layout')

@section('content')
   {{ Form::open(['route'=>'session.store']) }}
      {{ Form::label("txtusername", "Username") }}
      {{ Form::text("username") }}
      {{ Form::label("txtpassword", "Password") }}
      {{ Form::password("password") }}
      {{ Form::submit("login") }}
      {{ Form::close() }}
@stop