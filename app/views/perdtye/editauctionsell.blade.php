@extends('perdtye/header')

@section('content')
<!-- aucion -->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				<div class="col-md-8 column">
					<form action="auctiontype.html" method="get">
						<legend>Sell Registration form</legend>
						<div class="row clearfix">
							<div class="col-md-4 column">
								<h5>Headline :</h5>
							</div>
							<div class="col-md-8 column">
								<input type="text" name="subject" data-validation="required" id="inputEmail" class="form-control" placeholder="Item Subject" disabled value="iPhone6">
							</div>
						</div>

						<div class="row clearfix" style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Upload more image :</h5>
							</div>
							<div class="col-md-8 column">
								<input type="file" data-validation="mime size" data-validation-allowing="jpg, png, gif" 
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

						<!-- Begintime -->
						<div class="row clearfix"  style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Begining Time :</h5>
							</div>
							<div class="col-md-8 column">
								<div class="row clearfix">
									<div class="col-md-6 column">
										<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
											<input type="text" class="form-control" placeholder="HH:MM" name="begintime" data-validation="time" disabled value="12:32">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-time"></span>
											</span>
										</div>
									</div>
									<div class="col-md-6 column">
										<div class="form-group">
											<div class="col-lg-10" style="width:100%">
												<input type="text" class ="form-control datepicker" data-validation="date" data-validation-format="dd/mm/yyyy" id="inputDate" name="begindate" 
												placeholder="dd/mm/yyyy" disabled value="11/12/2002">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- endtime -->
						<div class="row clearfix"  style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Ending Time :</h5>
							</div>
							<div class="col-md-8 column">
								<div class="row clearfix">
									<div class="col-md-6 column">
										<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
											<input type="text" class="form-control" placeholder="HH:MM" name="endtime" data-validation="time">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-time"></span>
											</span>
										</div>
									</div>
									<div class="col-md-6 column">
										<div class="form-group">
											<div class="col-lg-10" style="width:100%">
												<input type="text" class ="form-control datepicker" data-validation="date" data-validation-format="dd/mm/yyyy" id="inputDate" name="enddate" 
												placeholder="dd/mm/yyyy">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- price -->
						<div class="row clearfix"  style="margin-top:10px">
							<div class="col-md-4 column">
								<h5>Minimum bid :</h5>
							</div>
							<div class="col-md-8 column">
								<input name="price" type="text" data-validation="number" data-validation-allowing="float" id="inputEmail" class="form-control" placeholder="Minimum bid">
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
<!-- aucion -->
@stop

@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop