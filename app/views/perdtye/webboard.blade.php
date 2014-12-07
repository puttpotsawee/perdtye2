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
				<img alt="140x140" width="150px" src={{$picture}}></img>
			</div>
			<div class="col-md-7"> 
				<p>&nbsp;</p>
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
				
				<form class="form-horizontal" action="account.php" method="get">

					<div class="well-shadow">
						<fieldset>
							<legend>{{$question->topic}}</legend>

							<div class="row clearfix" >
								<div class="form-group">
									<div class="col-md-1 column">
									</div>
									<div class="col-md-10 column">
										<h5 class="control-label" style="text-align:left;">{{$question->content}}</h5>
									</div>
									<div class="col-md-1 column">
									</div>
								</div>
							</div>
						</fieldset>
					</div>

					<!-- <div class="well-shadow-wb">
						<fieldset> -->
					<div class="well-shadow-wbout">		
								<?php 
								for($i=1;$i<=10;$i++){ 
									?>
								
								<div class="well-shadow-wb">
						<fieldset>
								<div class="row clearfix" >
									<div class="form-group">
										<div class="col-md-1 column">
										</div>
										<div class="col-md-10 column">
											<legend style="margin-top:0px;">Answer <?php echo $i; ?></legend>
											<h5 class="control-label" style="text-align:left;">ckjsdnclnsdcknsd;kna;djvavnadojvna;jnv;nva jaoisjfn;asdn asj oisjfao sko jiofjaio ;sj;oiajiavjiodji aj isoijfo;skfmeoirfjoiwjjacnasdkj</h5>
										</div>
										<div class="col-md-1 column">
										</div>
									</div>
								</div>
								</fieldset>
					</div>
								<?php } ?>

						<div class="well-shadow-wb">
						<fieldset>
							<div class="row clearfix" style="margin-top:0px;" >
								<legend ></legend>
								<div class="form-group" style="margin-top:30px;">

									<div class="col-md-1 column">
									</div>
									<!-- <label for="textArea" class="col-lg-3 control-label">Answers<text style="color:red">*</text> :</label> -->
									<div class="col-md-10 column">

										<textarea class="form-control" data-validation="required" rows="3" id="textArea" style="height:200px" name="answer" placeholder="Answers"></textarea>

									</div>
									<div class="col-md-1 column">
									</div>
								</div>
							</div>

							<div class="row clearfix">
								<div class="form-group">
									<div class="col-md-1 column">
									</div>
									<div class="col-md-10 column">
										<a href="#myModal" class="btn btn-primary" style="width:30%;float:right;" data-toggle="modal">Submit</a>
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
									<div class="col-md-1 column">
									</div>
								</div>
							</div>
						</fieldset>
					</div>
				</div>
				</form>

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