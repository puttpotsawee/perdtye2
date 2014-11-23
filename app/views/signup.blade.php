@extends('layout')

@section('content')
   {{ Form::open(['route'=>'signup.store']) }}
      <div>
            {{ Form::label("username", "Username") }}
            {{ Form::text("username") }}
      </div>

      <div>
            {{ Form::label("password", "Password") }}
            {{ Form::password("password") }}
      </div>

      <div>
            {{ Form::label("email", "Email") }}
            {{ Form::text("email") }}
      </div>

      <div>
            {{ Form::label("status", "Status") }}
            {{ Form::text("status") }}
      </div>

      <div>
            {{ Form::label("name", "Name") }}
            {{ Form::text("name") }}
      </div>

      <div>
            {{ Form::label("surname", "Surname") }}
            {{ Form::text("surname") }}
      </div>

      <div>
            {{ Form::label("phonenumber", "phonenumber") }}
            {{ Form::text("phonenumber") }}
      </div>

      <div>
            {{ Form::submit("submit") }}
            {{ Form::close() }}
      </div>
@stop