@extends('perdtye/header')

@section('content')
<!-- report -->
<div class="container">
	<!-- FORM -->
	<div class="col-sm-2">
	</div>
	<div class="col-sm-8">
		<div class="well-shadow" style="margin-top:60px">
			<form class="form-horizontal" action="report" method="post">
				
				
				<fieldset>
					<legend>Report</legend>
					
					
					<div class="form-group">
						<label for="inputSubject" class="col-lg-3 control-label">Subject :</label>
						<div class="col-lg-6">
							<input type="text" name="topic" data-validation="required" class="form-control" id="inputSubject" placeholder="Subject">
						</div>
					</div>
					      
					<div class="form-group">
						<label for="textArea" class="col-lg-3 control-label" >Descriptions :</label>
						<div class="col-lg-6">
							<textarea data-validation="required" name="content" class="form-control" rows="3" id="textArea" style="height:250px"></textarea>
							
						</div>
					</div>

					<!--MODAL SUMBIT***-->
					<div class="form-group">
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