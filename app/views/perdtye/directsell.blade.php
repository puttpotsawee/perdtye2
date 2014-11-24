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
					<form action="directtype.html" method="get">
						<legend>Sell Registration form</legend>
						<div class="row clearfix">
							<div class="col-md-4 column">
								<h5>Headline :</h5>
							</div>
							<div class="col-md-8 column">
								<input type="text" name="subject" data-validation="required" id="inputEmail" class="form-control" placeholder="Item Subject">
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Upload image :</h5>
							</div>
							<div class="col-md-8 column">
								<input type="file" data-validation="required mime size" data-validation-allowing="jpg, png, gif" 
								data-validation-max-size="2M" id="exampleInputFile" name="pic[]" multiple=""/>
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Description :</h5>
							</div>
							<div class="col-md-8 column">
								<textarea name="description" data-validation="required" class="form-control" rows="7"  placeholder="Descriptions eg. color, size, expired date, first hand or second hand."></textarea>
							</div>
						</div>

						<div class="row clearfix"  style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Price :</h5>
							</div>
							<div class="col-md-8 column">
								<input name="price" type="text" data-validation="number" data-validation-allowing="float" id="inputEmail" class="form-control" placeholder="Price for 1 Item">
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Quantity :</h5>
							</div>
							<div class="col-md-8 column">
								<input name="quantity" type="text" id="inputEmail" data-validation="number" class="form-control" placeholder="Total Quantity">
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Condition :</h5>
							</div>
							<div class="col-md-8 column">
								<textarea name="condition" class="form-control" rows="7" data-validation="required" placeholder="Descriptions"></textarea>
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">

							</div>
							<div class="col-md-8 column">
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
					</form>
				</div>
				<div class="col-md-2 column">
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