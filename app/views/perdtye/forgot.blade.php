@extends('perdtye/header')

@section('content')
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
				<p style="margin-top:30px;">Enter your registered email. If you don't remember your registered email, enter your username.</p>
				<form class="form-horizontal" role="form" action="statusforgot.html" method="get">
					<div class="form-group">

						<div class="col-sm-12">
							<input name="email" data-validation="email" type="text" class="form-control" id="inputEU" style="margin-top:20px;"/>
						</div>
					</div>
					<div class="form-group" style="margin-top:30px;">
						<div class=" col-sm-4">
							<button type="submit" class="btn btn-primary">Continue</button>
						</div>
						<div class="col-sm-3" style="float:right;">
							<a href="login" class="btn btn-default" style="float:right;">Login</a>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-3 column">
			</div>
		</div>
	</div>
</div>
@stop
<!-- forgot -->
@section('footer')
<nav class="navbar navbar-default navbar-bottom2" style="bottom:0%;position: fixed;" role="navigation">
	@stop