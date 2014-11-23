@extends('layout')

@section('content')
   {{ Form::open(['route'=>'signup.store']) }}

      {{ Form::label("username", "Username") }}
      {{ Form::text("username") }}

      {{ Form::label("password", "Password") }}
      {{ Form::password("password") }}

      {{ Form::label("email", "Email") }}
      {{ Form::text("email") }}

      {{ Form::label("status", "Status") }}
      {{ Form::text("status") }}

      {{ Form::label("name", "Name") }}
      {{ Form::text("name") }}

      {{ Form::label("surname", "Surname") }}
      {{ Form::text("surname") }}

      {{ Form::label("phonenumber", "phonenumber") }}
      {{ Form::text("phonenumber") }}

      {{ Form::submit("submit") }}
      {{ Form::close() }}
@stop