@extends('perdtye/header')

@section('content')
<!-- auction -->
<div class="container" style="margin-top:30px;">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="row clearfix">
				<div class="col-md-2 column">
				</div>
				
				<div class="col-md-8 column">
					<div class="well-shadow">

						<!-- <form action="auctiontype.html" method="get"> -->
						{{ Form::open(array('files'=>true)) }}
						<legend>Auction Sell Registration form</legend>

						<div class="row clearfix">
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
										<input id="files" type="file" data-validation="required mime size" data-validation-allowing="jpg, png, gif" 
										data-validation-max-size="2M" id="exampleInputFile" name="pic[]" multiple=""/>
										<!-- <img style="margin-top:15px;" id="blah" src=""  /> -->
										<output id="result" />
									</div>
								</div>



								<!-- Begintime -->
								<div class="row clearfix"  style="margin-top:10px">
									<div class="col-md-3 column">
										<h5>Begining Time :</h5>
									</div>
									<div class="col-md-9 column">
										<div class="row clearfix">
											<div class="col-md-6 column">
												<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
													<input name="start_time" type="text" class="form-control" placeholder="HH:MM" name="begintime" data-validation="time">
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-time"></span>
													</span>
												</div>
											</div>
											<div class="col-md-6 column">
												<div class="form-group">
													<div class="col-lg-10" style="width:100%">
														<div class="input-group">
														<input name="start_date" type="text" class ="form-control datepicker" data-validation="date" data-validation-format="dd/mm/yyyy" id="inputDate" name="begindate" 
														placeholder="dd/mm/yyyy">
														<span class="input-group-addon">
															<i class="glyphicon glyphicon-calendar"></i>
														</span>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- endtime -->
								<div class="row clearfix"  style="margin-top:10px">
									<div class="col-md-3 column">
										<h5>Ending Time :</h5>
									</div>
									<div class="col-md-9 column">
										<div class="row clearfix">
											<div class="col-md-6 column">
												<div class="input-group clockpicker" data-placement="left" data-align="top" data-autoclose="true">
													<input name='end_time' type="text" class="form-control" placeholder="HH:MM" name="endtime" data-validation="time">
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-time"></span>
													</span>
												</div>
											</div>
											<div class="col-md-6 column">
												<div class="form-group">
													<div class="col-lg-10" style="width:100%">
													<div class="input-group">
														<input name='end_date' type="text" class ="form-control datepicker" data-validation="date" data-validation-format="dd/mm/yyyy" id="inputDate" name="enddate" 
														placeholder="dd/mm/yyyy">
														<span class="input-group-addon">
															<i class="glyphicon glyphicon-calendar"></i>
														</span>
													</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

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

								<!-- price -->
								<div class="row clearfix"  style="margin-top:10px">
									<div class="col-md-3 column">
										<h5>Minimum bid :</h5>
									</div>
									<div class="col-md-9 column">
										<input name="minimum_bid" type="text" data-validation="number" data-validation-allowing="float" id="inputEmail" class="form-control" placeholder="Minimum bid">
									</div>
								</div>


								<div class="row clearfix" style="margin-top:10px">
									<div class="col-md-3 column">
										<h5>Bidding Range :</h5>
									</div>
									<div class="col-md-9 column">
										<input type='text' name="bidding_range" class="form-control" rows="7" data-validation="required" placeholder="Range of each bid">
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
								<!-- </form> -->
								{{ Form::close() }}
							</div>
						</div>
							</div>
						</div>
						<div class="col-md-2 column">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- auction -->
		@stop

		@section('footer')
		<nav class="navbar navbar-default navbar-bottom2" role="navigation">
			@stop

			<script>
window.onload = function(){
    //Check File API support
    if(window.File && window.FileList && window.FileReader)
    {
        var filesInput = document.getElementById("files");
        filesInput.addEventListener("change", function(event){
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for(var i = 0; i< files.length; i++)
            {
                var file = files[i];
                //Only pics
                if(!file.type.match('image'))
                    continue;
                var picReader = new FileReader();
                picReader.addEventListener("load",function(event){
                    var picFile = event.target;
                    var div = document.createElement("div");
                    div.innerHTML = "<img class='thumbnail' style='width:100%' src='" + picFile.result + "'" + "title='" + picFile.name + "'/>";
                    output.insertBefore(div,null);
                });
                //Read the image
                picReader.readAsDataURL(file);
            }
            // filesInput.disabled=true;
        });
        
    }
    else
    {
        console.log("Your browser does not support File API");
    }
}
</script>
