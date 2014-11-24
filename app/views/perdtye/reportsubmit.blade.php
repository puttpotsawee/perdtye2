@extends('perdtye/header')

@section('content')
<!-- report -->
<div class="container">
	<!-- FORM -->
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="well-shadow" style="margin-top:60px; height:400px;">
			<form class="form-horizontal" action="account.php" method="get">
				
				
				<fieldset>
					<legend>Report</legend>
					
					
					<div class="form-group" >
						<div style="margin-top:15px;">
							<div class="col-lg-3" >
								<label style="float:right;">Subject :</label>
							</div>
							<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
							<div class="col-lg-9">
								<p>I didn't received my item</p>
								<input type="hidden" name="topic" value="I didn't received my item"/>
							</div>
						</div>
					</div>  
					
					<div class="form-group">
						<div class="col-lg-3">
							<label style="float:right;">About :</label>
						</div>
						<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
						<div class="col-lg-9">
							<p name="type">Apple iPhone6</p>
							<input type="hidden" name="type" value="Apple iPhone6"/>
						</div>
					</div>         
					
					<div class="form-group">

						<div class="col-lg-3">
							<label style="float:right;">Description :</label>
						</div>
						<!-- <label for="inputAbout" class="col-lg-3 control-label">About :</label> -->
						<div class="col-lg-7">
							<p style="word-wrap: break-word;">s;djfailbvaejnasddlskdksdksldsldlsdklskskldksldksldksldsdksldksdljslcbakbshdbhsdbhbcskhdbskhdbchdbchdbshbienjsdndindjsijsdkbsbsdklbdskskjnsjdncjdk</p>
							<input type="hidden" name="content" value="s;djfailbvaejnasddlskdksdksldsldlsdklskskldksldksldksldsdksldksdljslcbakbshdbhsdbhbcskhdbskhdbchdbchdbshbienjsdndindjsijsdkbsbsdklbdskskjnsjdncjdk"/>

						</div>
						<div class="col-lg-2">
						</div>
					</div> 

					<!--MODAL SUMBIT***-->
					<div class="form-group" style="margin-top:70px;">
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
<!-- report -->
@stop
@section('footer')
<nav class="navbar navbar-default navbar-bottom2" role="navigation">
	@stop