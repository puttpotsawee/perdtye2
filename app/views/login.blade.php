@extends('layout')



@section('content')

@if (Session::has('flash_error'))
    <div id="flash_error">{{ Session::get('flash_error') }}</div>
@endif
   {{ Form::open(['route'=>'session.store']) }}
      {{ Form::label("txtusername", "Username") }}
      {{ Form::text("username") }}
      {{ Form::label("txtpassword", "Password") }}
      {{ Form::password("password") }}
      {{ Form::submit("login") }}
      {{ Form::close() }}
@stop