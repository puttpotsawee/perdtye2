@extends('perdtye/header')

@section('content')
<!-- statusforgot -->
<!--DIV RESET YOUR PASSWORD -->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-3 column">
		</div>
		<div class="col-md-6 column">
			<div class="well-shadow" style="margin-top:60px;">
				<legend>
					Reset Your Password
				</legend>
				<h4 style="margin-top:30px; color:green;">Success!</h4>
				<p>Welcomeback, {{$name}}!</p>
				<p>Your PerdTye.com account password have been chaged</p>

				<p style="margin-top:20px;">Please keep your new password securely.</p>
				<p style="margin-top:20px;">Use your next password for the next login</p>
				<form class="form-horizontal" role="form">

					<div class="form-group" style="margin-top:30px;">
						<div class=" col-sm-4">
						{{HTML::link('/','Continue shopping',array('class'=>'btn btn-default','style'=>'margin-left:0px;'))}}
							<!-- <a href="home" class="btn btn-default" style="margin-left:0px;">Continue shopping</a> -->
						
						
						</div>
						
					</div>
				</form>
			</div>

		</div>
		<div class="col-md-3 column">
		</div>
	</div>
</div>

<!-- statusforgot -->
@stop
@section('footer')
<nav class="navbar navbar-default navbar-bottom2" style="bottom:0%;position: fixed;" role="navigation">
	@stop