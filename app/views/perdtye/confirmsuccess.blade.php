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
					Welcome to Perdtye dot Com
				</legend>
				<h4 style="margin-top:30px; color:green;">Your email ppp@ppp.ppp was confirmed </h4>
				<p>Follow the instructions in the email to confirm your email</p>

				<p style="margin-top:20px;">Thanks for signing up for Perdtye dot Com.</p>
				<p style="margin-top:20px;">Check your spam or junk mail folder.</p>
				<form class="form-horizontal" role="form">

					<div class="form-group" style="margin-top:30px;">
						<div class=" col-sm-12">
							<a href="/index.php" class="btn btn-info" style="width:100%">Go to Home</a>
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