@extends('perdtye/header')

@section('content')
<!-- QA -->
<div class="container">  
	<div class="col-md-2"> 
	</div> 
	<div class="col-md-8" style="margin-top:30px;"> 
		<!-- picture -->
		<div class="row clearfix ">	
			<div class="col-md-3"> 
				<img alt="140x140" width="150px" src="img/i6.png"></img>
			</div>
			<div class="col-md-7"> 
				<p>&nbsp;</p>
				<p>&nbsp;</p>

				<h4>
					IPhone 6 Plus  - Gold (AIS) - 16 GB
				</h4>
				<p>&nbsp;</p>
				<p>
					Seller : John
				</p>

			</div>
			<div class="col-md-2"> 
			</div>

		</div>
		<!-- Q/A Zone -->
		<div class="row clearfix ">	


			<div class="col-sm-12" style="margin: 15px">
				<div class="well-shadow">
					<form class="form-horizontal" action="account.php" method="get">


						<fieldset>
							<legend>Q/A</legend>


							<div class="form-group">
								<label for="inputSubject" class="col-lg-3 control-label">Subject<text style="color:red">*</text> :</label>
								<div class="col-lg-6">
									<input type="text" data-validation="required" class="form-control" id="inputSubject" placeholder="Subject" name="topic">
								</div>
							</div>


							<div class="form-group">
								<label for="textArea" class="col-lg-3 control-label">Descriptions<text style="color:red">*</text> :</label>
								<div class="col-lg-6">
									<textarea class="form-control" data-validation="required" rows="3" id="textArea" style="height:200px" name="content" placeholder="Descriptions"></textarea>

								</div>
							</div>


							<div class="form-group">
								<div class="col-lg-3 col-lg-offset-7">
									<a href="#myModal" class="btn btn-primary" style="width:60%" data-toggle="modal">Submit</a>
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
						</fieldset>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"> 
		</div> 
	</div>
</div>
<!-- QA -->
@stop

@section('footer')
	<nav class="navbar navbar-default navbar-bottom2" role="navigation">
@stop