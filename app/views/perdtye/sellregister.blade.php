@extends('perdtye/header')

@section('content')
<!-- sell register -->
<div class="container">
<div class="row clearfix">
	<div class="col-md-12 column">
		<!--Profile edit-->
		<div class="col-lg-offset-2 col-lg-8 well-shadow">

			<!-- <form class="form-horizontal" action="account.php" method="get"> -->
			{{Form::open(array('action'=>'SignupController@registeringSeller','class'=>'form-horizontal'))}}
				<fieldset>
					<legend>Edit Profile</legend>
					<div class="input-group">
						<img for="image" src="img/mhoo.jpg" class="img-thumbnail img-responsive" alt="Responsive image" style="margin-left: 20px ;height: 300px"/>

					</div>
					<div class="form-group" style="margin-top:30px;">
						<div class="col-lg-1"></div>

						<div class="col-lg-5 form-group">
							<label for="inputFirstname" class="control-label">First name</label>
							<div >
								<input type="text" class="form-control" id="inputFirstname" value={{$user->name}} disabled>
							</div>
						</div>

						<div class="col-lg-offset-1 col-lg-5">
							<label for="inputLastname" class="control-label">Last name</label>
							<div >
								<input type="text" class="form-control" id="inputLastname" value={{$user->surname}} disabled>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-1"></div>
						<div class="col-lg-5 form-group" >
							<label for="inpuDate" class="control-label" >Birth Date</label>

							<div style="width:220px">
								<input type="text" class ="form-control datepicker" id="inputDate" name="inputDate" value=" xxxx-xx-xx" disabled>
							</div>
							<label for="inputEmail" class="control-label">Email</label>
							<div >
								<input type="email" class="form-control" id="inputEmail" value={{$user->email}} disabled>
							</div> 
						</div>    
					</div>

					<div class="form-group" style="margin-top:0px;">
						<div class="col-lg-1"></div>

						<div class="col-lg-5 form-group">
							<label for="inputFirstname" class="control-label">ID card Number</label>
							<div >
								<input name='idcardnumber' type="text" data-validation="number length" data-validation-length="min13" class="form-control" id="inputFirstname" placeholder="0000000000000">
							</div>
						</div>

						<div class="col-lg-offset-1 col-lg-5">
							<label for="inputLastname" class="control-label">ID card copy</label>
							<div >
								<input type="file" id="img" data-validation="required" style="margin-top:10px;" name="idcopy"/>
							</div>
						</div>
					</div>



					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-3" style="margin-top:25px;">
							<div class="col-lg-6">
								<button type="reset" class="btn btn btn-default">Reset</button>
								<a href="#myModal" class="btn btn-primary" style="float:right" data-toggle="modal">Submit</a> 
								<div id="myModal" class="modal fade">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title">Confirmation</h4>
											</div>
											<div class="modal-body">
												<p>Do you want to submit the report?</p>
												<p class="text-warning"><small>If you don't press cancel.</small></p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">OK</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>



				</fieldset>
			</form>
		</div>
	</div>
</div>
</div>
<!-- sell register -->
@stop
@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop