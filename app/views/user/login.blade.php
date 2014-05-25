@extends("layout")
@section("content")
   {{ Form::open( array("route" => "user/login", "autocomplete" => "off") ) }}

   		{{ Form::label("username", "Username") }}
   		{{ Form::text("username", Input::old("username", array("placeholder" => "Barney") ) }}

   		{{ Form::label("password", "Password") }}
   		{{ Form::password("password") }}

   		{{ Form::submit("login") }}

   {{Form::close()}}
@stop

@section("footer")
	@parent
	<script src="//polyfill.io"></script>
@stop
