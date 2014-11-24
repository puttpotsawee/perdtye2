@extends('perdtye/header')

@section('content')
<!-- LOGIN DIV -->  
<div class="container" style="margin-top:30px">
	<form class="form-horizontal" role="form" action="index.php" method="get">
		<div class="col-sm-3">
		</div>
		<div class="col-sm-6">
			<div class="well-shadow">
				<legend>Login</legend>
				<div class="form-group" style="margin-top:30px;">
					<label for="Username" class="col-sm-3 control-label">User name</label>
					<div class="col-sm-9">
						<input type="text" data-validation="email" class="form-control" id="Username" 
						placeholder="Enter User Name" name="email">
					</div>
				</div>
				<div class="form-group">
					<label for="Password" class="col-sm-3 control-label">Password</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="Password" 
						placeholder="Enter Password" name="password">
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">

						<a href="forgot.html">Forget Your Password?</a>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Remember me
							</label>
						</div>
					</div>
				</div>
				<div class="form-group" style="margin-top:30px" >
					<div class="col-sm-3">
					</div>
					<div class="col-sm-3">
						<button type="submit" class="btn btn-default">Login</button>
					</div>
					<div class="col-sm-6">
						<a href="signup1.html" type="submit" class="btn btn-primary" style="float:right;">Sign Up</a>
					</div>
					<div class="col-sm-3">
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
		</div>
	</form>
	<div class="row clearfix" >
		<div class="col-md-12 column">
			<p>&nbsp;</p>
		</div>
	</div>
</div>
<!-- Form-->
@stop
@section('footer')
	<nav class="navbar navbar-default navbar-bottom2" style="bottom:0%;position: fixed;" role="navigation">
@stop