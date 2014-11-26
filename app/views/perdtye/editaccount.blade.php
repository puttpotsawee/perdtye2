@extends('perdtye/header')

@section('content')
<!-- editprofile -->

<div class="row clearfix">
	<div class="col-md-1 column">
	</div>
	<div class="col-md-10 column">
		<!--Profile edit-->
		<div class="col-lg-offset-2 col-lg-8 well-shadow">
			<form class="form-horizontal">
				<fieldset>
					<legend>Edit Profile</legend>
					<div class="input-group">
						<img for="image" src="img/mhoo.jpg" class="img-thumbnail img-responsive" alt="Responsive image" style="margin-left: 20px ;height: 300px"/>
						<input type="file" id="img" style="margin-left: 20px;margin-top:10px;"/>
					</div>
					<div class="form-group" style="margin-top:30px;">
						<div class="col-lg-1"></div>

						<div class="col-lg-5 form-group">
							<label for="inputFirstname" class="control-label">First name</label>
							<div >
								<input type="text" class="form-control" id="inputFirstname" value={{$name}}>
							</div>
						</div>

						<div class="col-lg-offset-1 col-lg-5">
							<label for="inputLastname" class="control-label">Last name</label>
							<div >
								<input type="text" class="form-control" id="inputLastname" value={{surname}}>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-1"></div>
						<div class="col-lg-5 form-group" >
							<label for="inpuDate" class="control-label" >Birth Date</label>

							<div style="width:220px">
								<input type="text" class ="form-control datepicker" id="inputDate" name="inputDate" 
								placeholder="dd/mm/yyyy"
								>
							</div>
							<label for="inputEmail" class="control-label">Email</label>
							<div >
								<input type="email" class="form-control" id="inputEmail" placeholder="Kuyแก้ด้วย">
							</div> 
						</div>    
					</div>

					<div class="form-group">
						<div class="col-lg-1"></div>
						<div class="col-lg-10 panel panel-default">
							<div class="panel-heading">Address</div>
							<div class="panel-body">
								<div class="col-lg-10">
									ช่วยแก้หน่อย ใส่ข้อมูลเก่าไม่เป็น
								</div>
								<a href="#" class="col-lg-2 btn btn-default">Edit</a>
							</div>
						</div>
						<a href="#" class="col-lg-offset-1 btn btn-primary">Add New</a>
					</div>

					<div class="form-group">
						<div class="col-lg-1"></div>
						<div class="col-lg-10 form-group">
							<h5>Your PayPal Account Information</h5>
							<div class="col-lg-6  well" >
								<div class="col-lg-6 ">
									<img src="img/paypal.png" width="130%" height="200%" />
								</div>
								<div class="col-lg-6 text-center" >
									<label >New to PayPal?</label>
									<a href="https://www.paypal.com/th/webapps/mpp/get-started" class="btn btn-info">Sign Up</a>

								</div>
							</div>
							<div class="col-lg-6 well text-center">
								
								<label >Already have a PayPal account?</label>
								<a href="https://www.paypal.com/" class="btn btn-info">Link my PayPal Account</a>
							</div>
						</div>
					</div>

					<legend>Change password</legend>
					<div class="form-group">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<div class="form-group">
								<label for="inputOldpass" class="control-label">Old password</label>
								<div >
									<input type="password" class="form-control" id="inputOldpass" style="width:300px" placeholder="Kuyแก้ด้วย">
								</div>
							</div>
							

							<div class="form-group">
								<p>
									<label for="inputNewpass" class="control-label">New password</label>
									
									<input type="password" class="form-control" id="inputNewpass" style="width:300px" placeholder="Kuyแก้ด้วย">
									
									<label for="inputNewpass" class="control-label">Please confirm new password</label>
								</p>
								<p>
									<input type="password" class="col-lg-6 form-control" id="inputRenew" style="width:300px" placeholder="Kuyแก้ด้วย">
								</p>

							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-default">Reset</button>
							<button type="submit" class="btn btn-primary"  style="margin-left: 20px">Save</button>
						</div>
					</div>



				</fieldset>
			</form>
		</div>
	</div>
	<div class="col-md-1 column">
	</div>
</div>

<!-- editprofile -->
@stop

@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop