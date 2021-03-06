@extends('perdtye/header')

@section('content')
<!-- QA -->

<div class="container"> 
				@if(Session::has('flash_message'))
				<div class="alert alert-dismissable alert-success" id ="flash_error" >
					<button type="button" class="close" data-dismiss="alert">×</button>
					<h4>Successful</h4>
					<p>{{ Session::get('flash_message') }}</p>
				</div>
				@endif 
	<div class="col-md-2"> 
	</div> 
	<div class="col-md-8" style="margin-top:30px;"> 
		<!-- picture -->
		<div class="row clearfix ">	
			<div class="col-md-3"> 
				<img alt="140x140" width="150px" src={{$picture}}></img>
			</div>
			<div class="col-md-7"> 
				<p>&nbsp;</p>

				<h4>
					{{$product->product_name}}
				</h4>
				<p>&nbsp;</p>
				<p>
					Seller : {{$seller->name}}
				</p>

			</div>
			<div class="col-md-2"> 
			</div>

		</div>
		<!-- Q/A Zone -->
		<div class="row clearfix ">	


			<div class="col-sm-12" style="margin: 15px">
				<div class="well-shadow">
					<form class="form-horizontal" action="qa" method="post">
						<input type="hidden" class="form-control" id="inputID" name="idproduct" value={{$product->idProduct}}>

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