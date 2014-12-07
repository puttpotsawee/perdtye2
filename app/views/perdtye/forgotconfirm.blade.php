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
				<h4 style="margin-top:30px; color:green;">We sent an email to {{$email}}</h4>
				<p>Follow the instructions in the email to reset your password</p>

				<p style="margin-top:20px;">Your email may take up to 5 minutes to arrive (depending on your email service provider). If you don't receive an email, try the following.</p>
				<p style="margin-top:20px;">Check your spam or junk mail folder.</p>
				<form class="form-horizontal" role="form">

					<div class="form-group" style="margin-top:30px;">
						<div class=" col-sm-4">
							<a href="forgot" class="btn btn-primary" style="margin-left:0px;">Request another email</a>
						</div>
						<div class="col-sm-3" style="float:right;">
							<a href="signup" class="btn btn-default" style="float:right;">Sign up</a>
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