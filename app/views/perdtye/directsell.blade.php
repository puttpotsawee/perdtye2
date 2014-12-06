@extends('perdtye/header')

@section('content')
<!-- direct -->
<div class="container" style="margin-top:30px;">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<div class="well-shadow">
						<!-- <form action="directtype.html" method="get"> -->
						{{ Form::open(array('files'=>true)) }}
						<legend>Direct Sell Registration form</legend>

						<div class="row clearfix" >
							<div class="col-md-1 column">
							</div>

							<div class="col-md-11 column">

								<div class="row clearfix" style="margin-top:15px;">
									<div class="col-md-3 column">
										<h5>Headline :</h5>
									</div>
									<div class="col-md-9 column">
										<input type="text" name="product_name" data-validation="required" id="inputEmail" class="form-control" placeholder="Item Subject">
									</div>
								</div>

								<div class="row clearfix" style="margin-top:10px">
									<div class="col-md-3 column">
										<h5>Upload image :</h5>
									</div>
									<div class="col-md-9 column">
										<input type="file" data-validation="mime size" data-validation-allowing="jpg, png, gif" 
										data-validation-max-size="2M" id="exampleInputFile" name="pic[]" multiple="true"/>
										<!-- {{Form::file('pic[]', array('multiple'=>true));}} -->
									</div>
								</div>

						<!-- <div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Description :</h5>
							</div>
							<div class="col-md-8 column">
								<textarea name="description" data-validation="required" class="form-control" rows="7"  placeholder="Descriptions eg. color, size, expired date, first hand or second hand."></textarea>
							</div>
						</div> -->
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Brand :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="brand" data-validation="required" class="form-control" rows="7"  placeholder="Describe the Brand">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Model :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="model" class="form-control" rows="7"  placeholder="Describe the model">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Property :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="property" class="form-control" rows="7"  placeholder="Describe the Property">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Dimension :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="dimension" class="form-control" rows="7"  placeholder="Describe the Dimension">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Defect :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="defect" class="form-control" rows="7"  placeholder="Describe the Defect">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Missing Part :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="missing_part" class="form-control" rows="7"  placeholder="Describe the Missing Part">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Payment Method :</h5>
							</div>
							<div class="col-md-9 column">
								<select class="form-control" name="payment_method">
									<option>Credit Card</option>
									<option>Account</option>
								</select>
							</div>

						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Return Policy :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="return_policy" class="form-control" rows="7"  placeholder="Specify your return policy">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Packaging Method :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="packaging_method" class="form-control" rows="7"  placeholder="Specify your packaging method">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Packaging Charge :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="packaging_charge" class="form-control" rows="7"  placeholder="Specify your packaging method">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Shipping Method :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="shipping_method" class="form-control" rows="7"  placeholder="Specify your shipping method">
							</div>
						</div>
						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Shipping Fee :</h5>
							</div>
							<div class="col-md-9 column">
								<input type="text" name="shipping_fee" class="form-control" rows="7"  placeholder="Specify your shipping fee">
							</div>
						</div>



						<div class="row clearfix"  style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Price :</h5>
							</div>
							<div class="col-md-9 column">
								<input name="price" type="text" data-validation="number" data-validation-allowing="float" id="inputEmail" class="form-control" placeholder="Price for 1 Item">
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">
								<h5>Quantity :</h5>
							</div>
							<div class="col-md-9 column">
								<input name="quantity" type="text" id="inputEmail" data-validation="number" class="form-control" placeholder="Total Quantity">
							</div>
						</div>

						

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-3 column">

							</div>
							<div class="col-md-9 column">
								<div class="row clearfix" style="margin-top:20px">
									<div class="col-md-6 column">
										<button type="button" style="width:100%;" class="btn btn-default">Reset</button>
									</div>
									<div class="col-md-6 column">
										<button type="submit" style="float:right; width:100%;" class="btn btn-primary">Confirm</button>
									</div>
								</div>
							</div>
						</div>
						<!-- </form> -->
						{{ Form::close() }}
					</div>
					<div class="col-md-1 column">
					</div>
				</div>
				<div class="col-md-2 column">
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<!-- direct -->
@stop

@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop