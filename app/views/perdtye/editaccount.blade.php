@extends('perdtye/header')

@section('content')
<!-- editprofile -->

<div class="row clearfix">
	<div class="col-md-1 column">
	</div>
	<div class="col-md-10 column">
		<!--Profile edit-->
				@if(Session::has('flash_message'))
				<div class="alert alert-dismissable alert-success" id ="flash_error" >
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h4>Successful</h4>
					<p>{{ Session::get('flash_message') }}</p>
				</div>
				@endif
				@if(Session::has('flash_error'))
				<div class="alert alert-dismissable alert-danger" id ="flash_error" >
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h4>Unuccessful</h4>
					<p>{{ Session::get('flash_error') }}</p>
				</div>
				@endif
		<div class="col-lg-offset-2 col-lg-8 well-shadow">
			<form class="form-horizontal" action="editaccount" method="post">
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
								<input type="text" class="form-control" id="inputFirstname" name="name" value={{$name}} >
							</div>
						</div>

						<div class="col-lg-offset-1 col-lg-5">
							<label for="inputLastname" class="control-label">Last name</label>
							<div >
								<input type="text" class="form-control" id="inputLastname" name="surname" value={{$surname}}>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-lg-1"></div>
						<div class="col-lg-5 form-group" >
							<label for="inpuDate" class="control-label" >Birth Date</label>

							<div style="width:220px">
								<input type="text" class ="form-control datepicker" id="inputDate" name="birthdate" 
								value={{$birthdate}}
								>
							</div>
							<label for="inputEmail" class="control-label">Email</label>
							<div >
								<input type="email" class="form-control" id="inputEmail" name="email" value={{$email}}>
							</div> 
						</div>    
					</div>

					<div class="form-group">
							<label for="inputStreet" class="col-lg-2 control-label">House No.*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="required" class="form-control" name="house_number" id="inputStreet" value={{$address->house_number}}>
							</div>
						</div>

						<div class="form-group">
							<label for="inputStreet" class="col-lg-2 control-label">Road*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="required" class="form-control" name="road" id="inputStreet" value={{$address->road}}>
							</div>
							<label for="inputPostCode" class="col-lg-2 control-label">District*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="required" class="form-control" name="district" id="inputPostCode" value={{$address->district}}>
							</div>
						</div>

						<div class="form-group">
							<label for="inputCity" class="col-lg-2 control-label">City*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="required" class="form-control" name="city" id="inputCity" value={{$address->city}}>
							</div>
							<label for="inputPostCode" class="col-lg-2 control-label">Province*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="required" class="form-control" name="province" id="inputPostCode" value={{$address->province}}>
							</div>
						</div>

						<div class="form-group">
							<label for="inputRegion" class="col-lg-2 control-label">Country*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="required" class="form-control" name="country" id="inputRegion" value={{$address->country}}>
							</div>
							<label for="inputPostCode" class="col-lg-2 control-label">Post Code*</label>
							<div class="col-lg-4">
								<input type="text" data-validation="number required" class="form-control" name="zipcode" id="inputPostCode" value={{$address->zipcode}}>
							</div>
						</div>

						<div class="form-group">
							<label for="inputTel" class="col-lg-2 control-label">Primary Telephone number*</label>
							<div class="col-lg-4">
								<input type="text" class="form-control" data-validation="swephone" name="phonenumber"id="inputEmail" value={{$phonenumber}}>
							</div>
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
									<input type="password" name="oldpassword" class="form-control" id="inputOldpass" style="width:300px" >
								</div>
							</div>
							

							<div class="form-group">
								<p>
									<label for="inputNewpass" class="control-label">New password</label>
									
									<input type="password" name="password_confirmation" class="form-control" id="inputNewpass" style="width:300px" >
									
									<label for="inputNewpass" class="control-label">Please confirm new password</label>
								</p>
								<p>
									<input type="password" name="password" data-validation="confirmation" class="col-lg-6 form-control" id="inputRenew" style="width:300px" >
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