@extends('perdtye/header')

@section('content')
<!-- feedback -->
<!--REPORT-->
<div class="container">
	<!-- FORM -->
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="well-shadow" style="margin-top:60px; ">
			<form class="form-horizontal" method="post" action="feedback">
				
				<fieldset>
					<legend>Feedback</legend>
					
					
					<div class="form-group" >
						<div style="margin-top:15px;">
							<div class="col-lg-3" >
								<h5 style="float:right;">Item :</h5>
							</div>
							<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
							<div class="col-lg-9">
								<h4 style="color:grey;">{{$product_name}}</h4>
							</div>
						</div>
					</div>   

					<div class="form-group" >
						<div style="margin-top:15px;">
							<div class="col-lg-3" >
								<h5 style="float:right;">Member :</h5>
							</div>
							<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
							<div class="col-lg-9">
								<h4 style="color:grey;">{{$member_username}}</h4>
							</div>
						</div>
					</div>     
					
					<div class="form-group" >
						<div class="col-lg-3" >
							<h5 style="float:right;">Score :</h5>
						</div>
						<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
						<div class="col-lg-9">
							<h5 class="choice" style="color:grey;">Item is good as described</h5>
							<span class="star-rating">
								<input type="radio" name="score" data-validation="required" value="1"><i></i>
								<input type="radio" name="score" value="2"><i></i>
								<input type="radio" name="score" value="3"><i></i>
								<input type="radio" name="score" value="4"><i></i>
								<input type="radio" name="score" value="5"><i></i>
								<input type="hidden" name="idTransaction" value={{$idTransaction}}><i></i>
							</span>
						</div>
					</div>
					

					<div class="form-group">

						<div class="col-lg-3">
							<label style="float:right;">Comment :</label>
						</div>
						<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
						<div class="col-lg-6">
							<textarea class="form-control" data-validation="required" name="content" rows="3" id="textArea" style="height:250px"></textarea>
							
						</div>
						<div class="col-lg-2">
						</div>
					</div> 

					<!--MODAL SUMBIT***-->
					<div class="form-group" style="margin-top:20px;">
						<div class="col-lg-10 col-lg-offset-3" style="margin-top:25px;">
							<div class="col-lg-7">
								<button class="btn btn btn-default">Cancel</button>
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
			<div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div>
		</div>
	</div>
	<div class="col-sm-2">
	</div>
</div>



<!-- END REPORT FORM-->
<!-- feedback -->
@stop

@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop