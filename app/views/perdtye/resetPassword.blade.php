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
					Creating new Password
				</legend>
				<p style="margin-top:30px;">Please Enter your new password.</p>
				<form class="form-horizontal" role="form" action="" method="get">
					<div class="form-group">
							<label for="inputPassword" class="col-lg-3 control-label">Create your password</label>
							<div class="col-lg-9">
								<input type="password" class="form-control" data-validation="strength" data-validation-help="Password must be 8 characters including 1 uppercase letter." data-validation-strength="2" name="password_confirmation" id="inputPassword" placeholder="">
							</div>
						</div>
					<div class="form-group">
							<label for="inputPassword2" class="col-lg-3 control-label">Re-enter your password*</label>
							<div class="col-lg-9">
								<input type="password" class="form-control" data-validation="confirmation" name="password" id="inputPassword2" placeholder="">
							</div>
						</div>
					<div class="form-group" >
						<div class="col-sm-3" style="float:right;">
							<button type="submit" class="btn btn-default">Continue</button>
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